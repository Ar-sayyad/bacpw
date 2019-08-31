// Copyright © 2011-2015 Shell International Exploration & Production. All rights reserved.
// Developed under license for Shell by PDS BV.
// Confidential and proprietary source code of Shell.
// Do not distribute without written permission from Shell.

define(['kendo', 'ViewModels/Alerts.Module', 'ViewModels/Base.ViewModel', 'ViewModels/BopReliability/BopUtility',
    'ViewModels/BopReliability/Accumulator', 'ViewModels/BopReliability/BopStack'],
    function (kendo, alerts, baseViewModel) {
        var viewModel = function (sectionName, area) {
            baseViewModel.prototype.constructor.call(this, sectionName);
            this.area = area;
        };
        var interval = 5000; // 5 second
        var timer;
        var resizeTimer;
        var drawRatio;
        var snapshotData;
        var staleData;
        var currentRigId;
        var currentStack;
        var configurationData;
        var hpuCookie = 'HpuActivated';
        var accumulator = new Accumulator();
        var hpuAjax;
        var hpuConfigurationAjax;
        var staleHpuAjax;

        viewModel.prototype = new baseViewModel();
        viewModel.prototype.constructor = viewModel;

        viewModel.prototype.getTemplateHtml = function () {
            return html;
        };

        viewModel.prototype.onShellSplitterResize = function (e) {
            resizeTimer = setTimeout(hpuResized, 500);
        };

        viewModel.prototype.initializeHpuRealTimeData = function () {
            getHpuConfiguration();
            getRealtimeData();
            clearTimeout(timer);
            timer = setInterval(getRealtimeData, interval);
        }

        viewModel.prototype.activate = function (view) {
            var isNotSupportedHtml = BopUtility.isFeatureNotSupported(BopUtility.Features.RTHpuDashboard);
            if (isNotSupportedHtml) {
                $(isNotSupportedHtml).appendTo(view);
                return;
            }
            $.cookies.set(hpuCookie, '1');
            baseViewModel.prototype.activate.call(this, view);
            this.initializeSection(view);
            currentRigId = sessionStorage.getItem(BopUtility.RigId);
            currentStack = sessionStorage.getItem(BopUtility.Stack);
            resizeTimer = setTimeout(hpuResized, 100);
            timer = setTimeout(this.initializeHpuRealTimeData, 100);
        };

        viewModel.prototype.deactivate = function () {
            $.cookies.set(hpuCookie, '0');
            clearInterval(timer);
            BopUtility.abortAjax(hpuAjax, hpuConfigurationAjax, staleHpuAjax);
            baseViewModel.prototype.deactivate.call(this);            
        };

        viewModel.prototype.initializeSection = function (view) {
            $(this.getTemplateHtml()).appendTo(view);
        };

        function getRealtimeData() {
            getStaleDataIndicator();
            getHpuRealTimeData();
        }

        function drawDS10HpuDashboard() {
            var canvas = $("#mainCanvasHpu")[0];
            var context = canvas.getContext('2d');
           
            if (context.canvas.width !== window.innerWidth - 200) {
                context.canvas.width = window.innerWidth - 200;
            }

            if (context.canvas.height !== window.innerHeight - 80) {
                context.canvas.height = window.innerHeight - 80;
            }
            context.clearRect(0, 0, canvas.width, canvas.height);
            
            accumulator.setContext(context);
            accumulator.setData(snapshotData);
            accumulator.setConfigurationData(configurationData);
            accumulator.setRatio(drawRatio);
            var x = 140;//370;
            var prevY = 87; //87
            accumulator.drawTitle('');
            accumulator.drawAccumulator(x, prevY, 'Surface Accumulator');
            x += 30;
            prevY += 380; //380
            accumulator.drawSeaLevel(x, prevY);
            accumulator.drawRigidConduit(x, 200);
            accumulator.drawAccumulator(x, prevY, 'Conduit');

            prevY = 225;
            x -= 150;
            context.fillStyle = "#d9d9d9";
            accumulator.drawFlowMeter(x, prevY, 20, 'Gallon Count', 0);
            var ySpacer = 200 - (80 * drawRatio);

            //var xHbu = 110;
            //var yHbu = 40;        
    
            //for (var j = 0; j < 2; j++) {
            //    accumulator.drawHbuMotor(xHbu, yHbu, j);
            //    yHbu += ySpacer;
            //}
            //var hbuFlowTotalizerX = 135;
            //var hbuFlowTotalizerY = 235;
            //accumulator.drawFlowMeter(hbuFlowTotalizerX, hbuFlowTotalizerY, 20, 'Gallon Count', 1);

            prevY = 110;
            var xMotor = 440;
            var motorSpacer = 210;
            var currentX = xMotor;
            var currentY = prevY;

            for (var i = 4; i > 1; i--) {
                if (i === 4) {
                    accumulator.drawHpuMotor(currentX, currentY, 6, true);
                } else {
                    accumulator.drawHpuMotor(currentX, currentY, i, true);
                }
                
                currentX += motorSpacer;                
            }

            x = 1065;
            prevY = 30;
            accumulator.drawHpuReservoirTank(x, prevY, 'ReservoirDS10');
            accumulator.drawDS10RelationshipLines();

            
            var shearTableX = 630;
            var shearTableY = 380;
            accumulator.drawShearRequirements(shearTableX, shearTableY, true);

            x = 150;
            prevY = 25;
            accumulator.drawStaleIndicator(x, prevY, staleData);
        }
        function newHpuDashboard() {
            var canvas = $("#mainCanvasHpu")[0];
            var context = canvas.getContext('2d');

            if (context.canvas.width !== window.innerWidth - 200) {
                context.canvas.width = window.innerWidth - 200;
            }

            if (context.canvas.height !== window.innerHeight - 80) {
                context.canvas.height = window.innerHeight - 80;
            }
            context.clearRect(0, 0, canvas.width, canvas.height);

            accumulator.setContext(context);
            accumulator.setData(snapshotData);
            accumulator.setConfigurationData(configurationData);
            accumulator.setRatio(drawRatio);

            var x = 200;//370;
            var prevY = 87; //87
            accumulator.drawTitle('');
            accumulator.drawAccumulator(x, prevY, 'Surface Accumulator');
            x += 30;
            prevY += 380; //380
            accumulator.drawSeaLevel(x, prevY);
            accumulator.drawRigidConduit(x, 200);
            accumulator.drawAccumulator(x, prevY, 'Subsea Accumulator');

            prevY = 225;
            x -= 150;
            context.fillStyle = "#d9d9d9";
            accumulator.drawFlowMeter(x, prevY, 20, 'Gallon Count', 0);
            var ySpacer = 200 - (80 * drawRatio);

            var shearTableX = 630; 
            var shearTableY = 380;
            accumulator.drawShearRequirements(shearTableX, shearTableY);

            x = 200;
            prevY = 25;
            accumulator.drawStaleIndicator(x, prevY, staleData);  

            prevY = 40;
            var xMotor = 720;
            var motorSpacer = 210;
            var currentX = xMotor;
            var currentY = prevY;

            for (var i = 0; i < 4; i++) {
                if (i === 4) {
                    accumulator.drawHpuMotor(currentX, currentY, 6, true);
                } else {
                    accumulator.drawHpuMotor(currentX, currentY, i, true);
                }
                if (i % 2 === 0) {
                    currentX += motorSpacer;
                } else {
                    currentX = xMotor;
                    currentY += ySpacer;
                }
            }

            x = 1065;
            prevY = 30;
            accumulator.drawHpuReservoirTank(x, prevY, 'ReservoirNEW');
            accumulator.drawNEWRelationshipLines();


                    
        }


        function drawHpuDashboard() {
            var canvas = $("#mainCanvasHpu")[0];
            var context = canvas.getContext('2d');

            if (context.canvas.width !== window.innerWidth - 200) {
                context.canvas.width = window.innerWidth - 200;
            }

            if (context.canvas.height !== window.innerHeight - 80) {
                context.canvas.height = window.innerHeight - 80;
            }
            context.clearRect(0, 0, canvas.width, canvas.height);

            accumulator.setContext(context);
            accumulator.setData(snapshotData);
            accumulator.setConfigurationData(configurationData);
            accumulator.setRatio(drawRatio);
            var x = 370;
            var prevY = 87;
            accumulator.drawTitle('');
            accumulator.drawAccumulator(x, prevY, 'Surface Accumulator');
            x += 30;
            prevY += 380;
            accumulator.drawSeaLevel(x, prevY);
            accumulator.drawRigidConduit(x, 200);
            accumulator.drawAccumulator(x, prevY, 'Subsea Accumulator');

            prevY = 225;
            x -= 150;
            context.fillStyle = "#d9d9d9";
            accumulator.drawFlowMeter(x, prevY, 20, 'Gallon Count', 0);
            var ySpacer = 200 - (80 * drawRatio);

            var xHbu = 110;
            var yHbu = 40;        
    
            for (var j = 0; j < 2; j++) {
                accumulator.drawHbuMotor(xHbu, yHbu, j);
                yHbu += ySpacer;
            }
            var hbuFlowTotalizerX = 135;
            var hbuFlowTotalizerY = 235;
            accumulator.drawFlowMeter(hbuFlowTotalizerX, hbuFlowTotalizerY, 20, 'Gallon Count', 1);

            prevY = 40;
            var xMotor = 720;
            var motorSpacer = 210;
            var currentX = xMotor;
            var currentY = prevY;

            for (var i = 0; i < 4; i++) {
                accumulator.drawHpuMotor(currentX, currentY, i);

                if (i % 2 === 0) {
                    currentX += motorSpacer;
                } else {
                    currentX = xMotor;
                    currentY += ySpacer;
                }
            }
            x = 1065;
            prevY = 30;
            accumulator.drawHpuReservoirTank(x, prevY, 'Reservoir');
            accumulator.drawRelationshipLines();

            
            var shearTableX = 630;
            var shearTableY = 380;
            accumulator.drawShearRequirements(shearTableX, shearTableY);

            x = 400;
            prevY = 25;
            accumulator.drawStaleIndicator(x, prevY, staleData);
        };

        function getHpuConfiguration() {
            hpuConfigurationAjax = $.getJSON(window.baseUrl + 'api/BopReliabilityRt/GetHpuConfiguration', {
                rigId: currentRigId,
                bopStack: currentStack
            }).done(function (data) {
                configurationData = data;
            });
        }

        function getHpuRealTimeData() {
            BopUtility.abortAjax(hpuAjax);
            hpuAjax = $.getJSON(window.baseUrl + 'api/BopReliabilityRt/GetHpuSnapshotValues', {
                rigId: currentRigId,
                bopStack: currentStack
            }).done(function (data) {
                snapshotData = data;
                if (currentRigId == '215180') { 
                    drawDS10HpuDashboard();
                } else if (currentRigId == '215183' || currentRigId == '215184' || currentRigId == '215185') {
                    newHpuDashboard();
                } else {
                     drawHpuDashboard();
                }

                if ($.cookies.get(hpuCookie) === '1') {
                    $.cookies.set(hpuCookie, '0');
                    kendo.ui.progress($('#section'), false);
                }
            });
        }

        function getStaleDataIndicator() {
            BopUtility.abortAjax(staleHpuAjax);
            staleHpuAjax = $.getJSON(window.baseUrl + 'api/BopReliabilityRt/GetStaleDataIndicator', {
                rigId: currentRigId
            }).done(function (data) {
                staleData = data;
            });
        }

        function hpuResized() {
            drawRatio = BopUtility.getDrawRatio();
            if (currentRigId !== '215180') {
                drawHpuDashboard();
            } else {
                drawDS10HpuDashboard();
            }
        }

        var html =
            '<div id="section" class="container section">' +
                '<div id="section-container" class="container">' +
                    '<canvas id="mainCanvasHpu" style="margin-left:20px;">' +
                    'Your browser does not support HTML5. Please use Google Chrome or Internet Explorer version 9 or above.' +
                    '</canvas>' +
                '</div>' +
            '</div>';
        return viewModel;
    });