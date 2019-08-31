// Copyright © 2011-2015 Shell International Exploration & Production. All rights reserved.
// Developed under license for Shell by PDS BV.
// Confidential and proprietary source code of Shell.
// Do not distribute without written permission from Shell.

var Accumulator = (function () {
    var context;
    var ratio = 1;
    var defaultColor = '#AAAAAA';
    var redColor = '#FF0000';
    var greenColor = '#00FF00';
    var defaultFont;
    var alpha = 0;
    var delta = 0.005;
    var data;
    var configurationData;
    var maxPressureSurface;
    var api53MaxPressureWarning = ['API std 53: The maximum expected pressure for shearing pipe should be',
                                    'less than 90% of the max. operating pressure of the shear ram actuator.',
                                    'An additional risk assessment should be performed if the shear pressure',
                                    'is higher than 90 % of the maximum operating pressure.'];
    var motorNameArr = ['Charge Pump 1', 'Charge Pump 2', 'HPU 1 ', 'HPU 2 ', 'Boost Pump 1', 'Boost Pump 2', 'HPU 3 ']; //HPU 3 added for DS-10
    var snapshotKeysArr = [
        { id: 'ChargePump1', key: 'hpU_CHPUMP1_PRESS_SC' },
        { id: 'ChargePump2', key: 'hpU_CHPUMP2_PRESS_SC' },
        { id: 'Hpu1', key: 'hpU_EPUMP1_PRESS_SC' },
        { id: 'Hpu2', key: 'hpU_EPUMP2_PRESS_SC' },
        { id: 'Hpu3', key: 'hpU_EPUMP3_PRESS_SC' }, //just guessing right now (need for DS-10)
        { id: 'Hbu1', key: 'hbu Pump 1' },
        { id: 'Hbu2', key: 'hbu Pump 2' },
        { id: 'FlowTotalizer1', key: 'hpU_MAINACC_ACC' },
        { id: 'FlowTotalizer2', key: 'hbu Flowmeter' },
        { id: 'SurfaceAccumulator', key: 'hpU_MAINACC_PRESS_SC' },
        { id: 'ReservoirTank', key: 'reservoir tank level' },
        { id: 'BlueFlowTotalizer', key: 'blue Flowmeter' },
        { id: 'YellowFlowTotalizer', key: 'yellow Flowmeter' },
        { id: 'SubseaAccumulatorReadbackPressure', key: 'subsea Accumulator' },
        { id: 'ChargePump1Run', key: 'charge Pump 1 Running' },
        { id: 'ChargePump2Run', key: 'charge Pump 2 Running' },
        { id: 'Hpu1Run', key: 'e pump 1 Running' },
        { id: 'Hpu2Run', key: 'e pump 2 Running' },
        { id: 'Hpu3Run', key: 'e pump 3 Running' }, //just guessing right now (need for DS-10)
        { id: 'Hbu1Run', key: 'hbu Pump 1 Running' },
        { id: 'Hbu2Run', key: 'hbu Pump 2 Running' },
        { id: 'AutoshearReadbackPressure', key: 'autoshear Module Regulator Readback Pressure' }
    ];
    var relationshipLinesArr;
    var isHpuFirstTimeLoad = function () {
        return ($.cookies.get('HpuActivated') === '1');
    }
    var addRelLinePoint = function (id, x, y) {
        relationshipLinesArr.push({ id: id, x: x, y: y });
    }

    var getSnapshotKey = function (id) {
        var s = $.grep(snapshotKeysArr, function (r) {
            return r.id.toLowerCase() === id.toLowerCase();
        });
        return s.length > 0 ? s[0].key : '';
    }

    var getRelLinePoint = function (id) {
        return $.grep(relationshipLinesArr, function (r) {
            return r.id.toLowerCase() === id.toLowerCase();
        })[0];
    }

    var drawRoundRect = function (x, y, width, height, radius, fillColor, strokeColor) {
        context.save();
        if (typeof fillColor == 'undefined') {
            fillColor = defaultColor;
        }

        if (typeof strokeColor == 'undefined') {
            strokeColor = '#FFF';
        }

        if (typeof radius === 'undefined') {
            radius = 5;
        }

        if (typeof radius === 'number') {
            radius = { tl: radius, tr: radius, br: radius, bl: radius };
        } else {
            var defaultRadius = { tl: 0, tr: 0, br: 0, bl: 0 };

            for (var side in defaultRadius) {
                if (defaultRadius.hasOwnProperty(side)) {
                    radius[side] = radius[side] || defaultRadius[side];
                }
            }
        }
        context.beginPath();
        context.lineWidth = 1;
        context.moveTo(x + radius.tl, y);
        context.lineTo(x + width - radius.tr, y);
        context.quadraticCurveTo(x + width, y, x + width, y + radius.tr);
        context.lineTo(x + width, y + height - radius.br);
        context.quadraticCurveTo(x + width, y + height, x + width - radius.br, y + height);
        context.lineTo(x + radius.bl, y + height);
        context.quadraticCurveTo(x, y + height, x, y + height - radius.bl);
        context.lineTo(x, y + radius.tl);
        context.quadraticCurveTo(x, y, x + radius.tl, y);
        context.closePath();

        if (fillColor) {
            context.fillStyle = fillColor;
            context.fill();
        }

        if (strokeColor) {
            context.strokeStyle = strokeColor;
            context.stroke();
        }
        context.restore();
    };

    window.requestAnimFrame = (function (callback) {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 1);
        };
    })();

    var drawMotorBodyIndicator = function (x, prevY, smallHeight, spacer, spacer2, width, status) {
        context.save();

        if (status === 1) {
            var n = new Date().getSeconds();
            context.strokeStyle = n % 2 ? greenColor : '#00e600';
        } else {
            context.strokeStyle = '#FFF';
        }

        var yTemp = prevY;
        context.clearRect(x - smallHeight - spacer2, prevY, 100, 60); // Main Rectangle
        context.fillStyle = defaultColor;
        context.fillRect(x - smallHeight - spacer2, prevY, 100, 60); // Main Rectangle
        context.strokeRect(x - smallHeight - spacer2, prevY, 100, 60); // Main Rectangle
        context.beginPath();
        // Draw Body Indicator
        //context.globalAlpha = alpha;
        for (var i = 0; i < 5; i++) {
            yTemp += spacer2;
            context.moveTo(x - smallHeight - spacer, yTemp);
            context.lineTo(x + width - smallHeight * 2, yTemp);
        }
        context.lineWidth = 4;
        context.stroke();
        context.closePath();
        context.restore();
    }

    var drawStaleIndicator = function (x, y, staleData) {
        var labelSize = (12 * ratio) + 'px';
        var spacer = 15 * ratio;
        var isStale = staleData ? staleData.length === 0 || staleData[1] !== 'False' : true;
        x *= ratio;
        y *= ratio;
        context.save();
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];

        if (isStale) {
            context.fillText('Stale Data', x + spacer, y);
        } else {
            context.fillText('Last update: ' + staleData[0] + ' seconds ago.', x + spacer, y);
        }
        context.fillStyle = isStale ? BopStack.RedColor : BopStack.GreenColor;
        var radius = 12 * ratio;
        var spacer2 = 8 * ratio;
        context.beginPath();
        context.arc(x, y - spacer2, radius, 0, 2 * Math.PI, false);
        context.fill();
        context.closePath();
        context.restore();
    }

    var drawShearConfiguration = function (header, col1, col2, requiredPressure, shearResult, x, prevY, requiredPressure2, shearResult2, well, wellbore, waterDepth, masp, sarReadbackPressure, asReadbackPressure, isException) {
        isException = (typeof isException !== 'undefined') ? isException : false;
        var rowHeight = 20 * ratio;
        var rowWidth = 400 * ratio;
        var column1Width = 170 * ratio;
        var column2Width = 230 * ratio;
        var boxWidth = 80 * ratio;
        var spacer = 5 * ratio;
        var spacer2 = 15 * ratio;
        var spacer3 = 20 * ratio;
        var spacer4 = 10 * ratio;
        var textX = x + spacer;
        var greyColor = '#404040';
        var blackColor = '#000000';
        var whiteColor = '#FFFFFF';
        var indicatorX = x + rowWidth + spacer4;
        var indicatorSpacerX = 20 * ratio;
        var indicatorSpacerY = 36 * ratio;
        //var showMaxPressureWarning = false;

        var stackPressureText;
        if (isException) {
            stackPressureText = ' (Shear Ram Pressure)';
        } else {
            stackPressureText = ' (A/S module Pressure)';
        }

        var textY = prevY + spacer2;
        var labelSize = (16 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
        var shearResultStr;
        var isBadData = false;

        if (shearResult) {
            if (shearResult.value === 1) {
                shearResultStr = 'YES';
                context.fillStyle = BopStack.GreenColor;
            } else if (shearResult.value === -1) {
                shearResultStr = 'BAD';
                isBadData = true;
                context.fillStyle = BopStack.BadDataColor;
            } else {
                shearResultStr = 'NO';
                context.fillStyle = BopStack.RedColor;
            }
            // Indicator
            if (shearResult2) {
                var yPos = prevY + rowHeight * 2;
                indicatorSpacerY = 15 * ratio;
                context.strokeRect(indicatorX, yPos, boxWidth, rowHeight);
                context.fillRect(indicatorX, yPos, boxWidth, rowHeight);
                context.fillStyle = isBadData ? '#FFF' : BopStack.WhiteColor;
                context.fillText(shearResultStr, indicatorX + indicatorSpacerX, yPos + indicatorSpacerY);

                if (shearResult2.value === 1) {
                    shearResultStr = 'YES';
                    context.fillStyle = BopStack.GreenColor;
                } else if (shearResult2.value === -1) {
                    shearResultStr = 'BAD';
                    isBadData = true;
                    context.fillStyle = BopStack.BadDataColor;
                } else {
                    shearResultStr = 'NO';
                    context.fillStyle = BopStack.RedColor;
                }
                yPos += rowHeight;
                context.strokeRect(indicatorX, yPos, boxWidth, rowHeight);
                context.fillRect(indicatorX, yPos, boxWidth, rowHeight);
                context.fillStyle = isBadData ? '#FFF' : BopStack.WhiteColor;
                context.fillText(shearResultStr, indicatorX + indicatorSpacerX, yPos + indicatorSpacerY);
            } else {
                var multiplier = well && wellbore && waterDepth && masp ? 6 : 2;
                
                context.strokeRect(indicatorX, prevY + rowHeight * multiplier, boxWidth, rowHeight);
                context.fillRect(indicatorX, prevY + rowHeight * multiplier, boxWidth, rowHeight);
                context.fillStyle = isBadData ? '#FFF' : BopStack.WhiteColor;
                context.fillText(shearResultStr, indicatorX + indicatorSpacerX, prevY + rowHeight * (multiplier-1) + indicatorSpacerY);
            }
        }
        // Table
        labelSize = (10 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];

        if (well && wellbore && waterDepth && masp) {
            context.fillStyle = BopStack.BlueColor;
            context.fillRect(x, prevY, rowWidth, rowHeight);
            context.strokeRect(x, prevY, rowWidth, rowHeight);
            context.fillStyle = BopStack.WhiteColor;
            context.fillText('WELL: ' + well.toUpperCase(), textX, textY);
            prevY += rowHeight;
            textY += spacer3;

            context.fillStyle = BopStack.BlueColor;
            context.fillRect(x, prevY, rowWidth, rowHeight);
            context.strokeRect(x, prevY, rowWidth, rowHeight);
            context.fillStyle = BopStack.WhiteColor;
            context.fillText('WELLBORE: ' + wellbore.toUpperCase(), textX, textY);
            prevY += rowHeight;
            textY += spacer3;

            context.fillStyle = BopStack.BlueColor;
            context.fillRect(x, prevY, rowWidth, rowHeight);
            context.strokeRect(x, prevY, rowWidth, rowHeight);
            context.fillStyle = BopStack.WhiteColor;
            context.fillText('WATER DEPTH: ' + waterDepth, textX, textY);
            prevY += rowHeight;
            textY += spacer3;

            context.fillStyle = BopStack.BlueColor;
            context.fillRect(x, prevY, rowWidth, rowHeight);
            context.strokeRect(x, prevY, rowWidth, rowHeight);
            context.fillStyle = BopStack.WhiteColor;
            context.fillText('MASP: ' + masp, textX, textY);
            prevY += rowHeight;
            textY += spacer3;
        }
        context.fillStyle = BopStack.BlueColor;
        context.fillRect(x, prevY, rowWidth, rowHeight);
        context.strokeRect(x, prevY, rowWidth, rowHeight);
        context.fillStyle = BopStack.WhiteColor;
        context.fillText(header, textX, textY);
        prevY += rowHeight;
        
        // First Row
        context.fillStyle = greyColor;
        context.fillRect(x, prevY, column1Width, rowHeight); // First Column
        context.strokeRect(x, prevY, column1Width, rowHeight);
        context.fillRect(x + column1Width, prevY, column2Width, rowHeight); // Second Column
        context.strokeRect(x + column1Width, prevY, column2Width, rowHeight);
        // Column Values
        textY += spacer3;
        context.fillStyle = whiteColor;
        context.fillText(col1, textX, textY);
        context.fillText(col2, textX + column1Width, textY);
        prevY += rowHeight;

        // Second Row
        context.fillStyle = BopStack.BlackColor;
        context.fillRect(x, prevY, column1Width, rowHeight); // First Column
        context.strokeRect(x, prevY, column1Width, rowHeight);
        context.fillRect(x + column1Width, prevY, column2Width, rowHeight); // Second Column
        context.strokeRect(x + column1Width, prevY, column2Width, rowHeight);

       
        // Column Values
        var requiredLabel = requiredPressure2 ? 'CSR Required Shear Pressure' : 'Required (Shear & Seal Pressure)';
        textY += spacer3;
        context.fillStyle = whiteColor;
        context.fillText(requiredLabel, textX, textY);
        // Autoshear module pressure / Stack accumulator pressure value
        var sarPressure = sarReadbackPressure && sarReadbackPressure.value !== -1 ? BopUtility.round5(sarReadbackPressure.value) + ' ' + sarReadbackPressure.uom : 'BAD DATA';
        var asPressure = asReadbackPressure && asReadbackPressure.value !== -1 ? BopUtility.round5(asReadbackPressure.value) + ' ' + asReadbackPressure.uom : 'BAD DATA';
        var additionalPressureLabel = requiredLabel.indexOf('CSR') !== -1 ? sarPressure + ' (Stack accumulator pressure)' : asPressure + stackPressureText;

        context.fillText(requiredPressure + ' | ' + additionalPressureLabel, textX + column1Width, textY);

        if (requiredPressure2) {
            additionalPressureLabel = asPressure + stackPressureText;

            prevY += rowHeight;
            context.fillStyle = greyColor;
            context.fillRect(x, prevY, column1Width, rowHeight); // First Column
            context.strokeRect(x, prevY, column1Width, rowHeight);
            context.fillRect(x + column1Width, prevY, column2Width, rowHeight); // Second Column
            context.strokeRect(x + column1Width, prevY, column2Width, rowHeight);

            textY += spacer3;
            context.fillStyle = whiteColor;
            context.fillText('UBSR Required Seal Pressure', textX, textY);
            context.fillText(requiredPressure2 + ' | ' + additionalPressureLabel, textX + column1Width, textY);
        }
        prevY += rowHeight + spacer * 2;
        return prevY;
    }

    var drawShears = function (x, y, isException) {
        // Draw shears table
        // Draw shear results
        isException = (typeof isException !== 'undefined') ? isException : false;
        x *= ratio;
        context.save();

        var shearConfigurationArr = [
            {
                header: 'UBSR  (shear & seal pressure calculated @ 15000psi MAWHP & 10000ft WD)',
                lbl: 'ubsR Tubular',
                lblVal: 'ubsR Tubular Configuration',
                reqPressure: 'ubsR Required Seal and Shear Pressure',
                result: 'ubsR Can Seal and Shear'
            },
            {
                header: 'CSR x UBSR (shear & seal pressure calculated @ 15000psi MAWHP & 10000ft WD)',
                lbl: 'csRxUBSR Tubular',
                lblVal: 'csRxUBSR Tubular Configuration',
                reqPressure: 'csR Required Shear Pressure',
                reqPressure2: 'ubsR Required Seal Pressure',
                result: 'csR Can Shear',
                result2: 'ubsR Can Seal and Shear2'
            },
            {
                header: 'UBSR (Shear Verification)',
                lbl: 'ubsR Packet Tubular',
                lblVal: 'ubsR Packet Tubular Configuration',
                reqPressure: 'ubsR Packet Seal and Shear Pressure',
                result: 'ubsR Packet Can Seal and Shear',
                well: 'well Name',
                wellbore: 'wellbore',
                waterDepth: 'water Depth',
                masp: 'masp'
            }
        ];
        var prevY = y;
        var showMaxPressureWarning = false;

        for (var i = 0; i < shearConfigurationArr.length; i++) {
            var lbl = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].lbl, true);
            var lblValue = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].lblVal, true);
            var rp = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].reqPressure, true);
            var rp2 = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].reqPressure2, true);
            var well = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].well, true);
            var wellbore = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].wellbore, true);
            var waterDepth = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].waterDepth, true);
            var masp = BopUtility.getSnapshot(configurationData, shearConfigurationArr[i].masp, true);

            var shearResult = BopUtility.getSnapshot(data, shearConfigurationArr[i].result, true);
            var shearResult2 = BopUtility.getSnapshot(data, shearConfigurationArr[i].result2, true);
            var header = shearConfigurationArr[i].header;
            var sarReadbackPressure = BopUtility.getSnapshot(data, getSnapshotKey('SubseaAccumulatorReadbackPressure'), true);; // Stack Accumulator Regulator Readback Pressure
            var asReadbackPressure = BopUtility.getSnapshot(data, getSnapshotKey('AutoshearReadbackPressure'), true);; // Auto Shear Module Regulator Readback Pressure
            prevY = drawShearConfiguration(header, lbl, lblValue, rp, shearResult, x, prevY, rp2, shearResult2, well, wellbore, waterDepth, masp, sarReadbackPressure, asReadbackPressure, isException);

            if (rp / maxPressureSurface >= 0.9) { // Higher than 90% then show warning. API 53 rules
                showMaxPressureWarning = true;
            }
        }

        if (showMaxPressureWarning) {
            var warningBoxWidth = 450 * ratio;
            var warningBoxHeight = 100 * ratio;
            var spacer = 10 * ratio;
            var rowHeight = 20 * ratio;
            context.fillStyle = BopStack.RedColor;
            prevY = 360;
            x = 40 * ratio;
            context.fillRect(x, prevY, warningBoxWidth, warningBoxHeight); // First Column
            context.fillStyle = BopStack.WhiteColor;
            prevY += spacer + spacer;

            for (var k = 0; k < api53MaxPressureWarning.length; k++) {
                context.fillText(api53MaxPressureWarning[k], x + spacer, prevY);
                prevY += rowHeight;
            }
        }
        context.restore();
    }

    var drawFlowMeter = function (x, y, r, title, index) {
        // index 0 == Flow totalizer surface
        // index 1 == Flow totalizer HBU
        var key = index === 0 ? getSnapshotKey('FlowTotalizer1') : getSnapshotKey('FlowTotalizer2');
        var snapshot = BopUtility.getSnapshot(data, key, true);
        var snapshotValue = snapshot ? snapshot.value.toFixed(1) : '-';
        var uom = snapshot ? snapshot.uom : '';
        var spacer1 = 28;
        var spacer3 = 100 * ratio;
        var spacer4 = 70 * ratio;
        var spacer5 = index === 0 ? 35 : 185 * ratio;
        var spacer6 = index === 0 ? 35 : 5;
        x = (x * ratio) + spacer3;
        y += spacer4;
        context.save();
        var labelSize = (14 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];

        if (snapshot && snapshot.value !== -1) {
            context.fillText(title + ' ' + snapshotValue + ' ' + uom, x - spacer5, y + spacer6);

        } else if (!isHpuFirstTimeLoad()) {
            var wBadData = 155 * ratio;
            var hBadData = 18 * ratio;
            var badDataSpacer = index === 0 ? -50 - (5 * ratio) : 8 * ratio;
            context.fillStyle = BopStack.BadDataColor;
            context.fillRect(x - spacer5, y - spacer6 - badDataSpacer, wBadData, hBadData);
            context.fillStyle = '#000';
            context.fillText(title + ' BAD DATA', x - spacer5, y + spacer6);
        }
        context.fillStyle = defaultColor;
        context.beginPath();
        context.arc(x, y, r, 0, 2 * Math.PI);
        context.fill();
        context.stroke();
        context.closePath();
        // Draw middle icon
        context.beginPath();
        context.arc(x - spacer1, y, r, 0.27 * Math.PI, 1.75 * Math.PI, true);
        context.stroke();
        context.closePath();

        context.beginPath();
        context.arc(x + spacer1, y, r, 0.75 * Math.PI, 1.25 * Math.PI);
        context.stroke();
        context.closePath();

        addRelLinePoint('FlowTotalizerTop' + index, x, y - r);
        addRelLinePoint('FlowTotalizerBottom' + index, x, y + r);
        addRelLinePoint('FlowTotalizerLeft' + index, x - r, y);
        context.restore();
    }

    var drawRigidConduit = function (x, y) {
        var boxH = 30 * ratio;
        var boxW = 30 * ratio;
        var xSpacer = 10 * ratio;
        var ySpacer = 20 * ratio;
        var spacer = 85 * ratio;
        var xSpacer2 = 50 * ratio;
        var xSpacer3 = 88 * ratio;
        var xSpacer4 = 6 * ratio;
        var ySpacer2 = 260 * ratio;
        var ySpacer3 = 30 * ratio;
        var ySpacer4 = 35 * ratio;
        var ySpacer5 = 15 * ratio;

        x *= ratio;
        y = y + ySpacer2;
        context.save();

        // LMRP + BOP
        var boxSpacer1 = 25 * ratio;
        var boxSpacer2 = 60 * ratio;
        var boxSpacer3 = 10 * ratio;
        var boxSpacer4 = 15 * ratio;
        var boxSpacer5 = 75 * ratio;
        var boxSpacer6 = 10 * ratio;
        var boxLmrpW = 166 * ratio;
        var boxLmrpH = 90 * ratio;
        var boxHeight = 237 * ratio;
        var labelSize = (10 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];

        context.fillStyle = '#000';
        context.fillRect(x - boxSpacer3, y - boxSpacer1, boxLmrpW, boxHeight);
        context.strokeRect(x - boxSpacer3, y - boxSpacer1, boxLmrpW, boxHeight);
        context.fillStyle = BopStack.GreyColor;
        context.fillRect(x - boxSpacer3, y - boxSpacer1, boxLmrpW, boxLmrpH);
        context.strokeRect(x - boxSpacer3, y - boxSpacer1, boxLmrpW, boxLmrpH);

        var middleX = x + boxSpacer2;
        context.fillStyle = '#FFF';
        context.fillText('LMRP', middleX, y - boxSpacer4);
        context.fillText('BOP', middleX, y + boxSpacer5);
        // Rigid Conduit
        labelSize = (14 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
        context.fillStyle = BopStack.BluePodColor;
        context.fillRect(x, y - boxSpacer6, boxW, boxH);
        context.strokeRect(x, y - boxSpacer6, boxW, boxH);
        context.fillStyle = '#FFF';
        context.fillText('B', x + xSpacer, y + ySpacer - boxSpacer6);
        context.fillStyle = '#FFF';
        context.fillText('Blue Rigid Conduit', x - xSpacer2, y - ySpacer3);
        context.fillStyle = BopStack.YellowColor;
        context.fillRect(x + boxW + spacer, y - boxSpacer6, boxW, boxH);
        context.strokeRect(x + boxW + spacer, y - boxSpacer6, boxW, boxH);
        context.fillStyle = '#000';
        context.fillText('Y', x + boxW + spacer + xSpacer, y + ySpacer - boxSpacer6);
        context.fillStyle = '#FFF';
        context.fillText('Yellow Rigid Conduit', x + xSpacer3, y - ySpacer3);

        labelSize = (12 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];

        var bFlowTotalizerKey = getSnapshotKey('BlueFlowTotalizer');
        var yFlowTotalizerKey = getSnapshotKey('YellowFlowTotalizer');
        var snapshotFlowTotalizerB = BopUtility.getSnapshot(data, bFlowTotalizerKey, true);
        var snapshotFlowTotalizerY = BopUtility.getSnapshot(data, yFlowTotalizerKey, true);

        var bFlowTotalizer = snapshotFlowTotalizerB ? snapshotFlowTotalizerB.value.toFixed(1) : '-';
        var bFlowTotalizerUom = snapshotFlowTotalizerB ? snapshotFlowTotalizerB.uom : '';
        var yFlowTotalizer = snapshotFlowTotalizerY ? snapshotFlowTotalizerY.value.toFixed(1) : '-';
        var yFlowTotalizerUom = snapshotFlowTotalizerY ? snapshotFlowTotalizerY.uom : '';
        var wBadData = 70 * ratio;
        var hBadData = 18 * ratio;
        var badDataSpacer = 13 * ratio;

        context.fillStyle = '#000';
        context.fillText('Gallon Count ', x - xSpacer4, y + ySpacer4);
        context.fillText('Gallon Count ', x + xSpacer3 - xSpacer4, y + ySpacer4);

        if (snapshotFlowTotalizerB && snapshotFlowTotalizerB.value !== -1) {
            context.fillStyle = '#000';
            context.fillText(bFlowTotalizer + ' ' + bFlowTotalizerUom, x - xSpacer4, y + ySpacer4 + ySpacer5);
        } else if (!isHpuFirstTimeLoad()) {
            context.fillStyle = BopStack.BadDataColor;
            context.fillRect(x - xSpacer4, y + ySpacer4 + ySpacer5 - badDataSpacer, wBadData, hBadData);
            context.fillStyle = '#FFF';
            context.fillText('BAD DATA', x - xSpacer4, y + ySpacer4 + ySpacer5);
        }

        if (snapshotFlowTotalizerY && snapshotFlowTotalizerY.value !== -1) {
            context.fillStyle = '#000';
            context.fillText(yFlowTotalizer + ' ' + yFlowTotalizerUom, x + xSpacer3 - xSpacer4, y + ySpacer4 + ySpacer5);
        } else if (!isHpuFirstTimeLoad()) {
            context.fillStyle = BopStack.BadDataColor;
            context.fillRect(x + xSpacer3 - xSpacer4, y + ySpacer4 + ySpacer5 - badDataSpacer, wBadData, hBadData);
            context.fillStyle = '#FFF';
            context.fillText('BAD DATA', x + xSpacer3 - xSpacer4, y + ySpacer4 + ySpacer5);
        }

        // Draw Well head connector
        var whSpacer = 10 * ratio;
        var whSpacer2 = 8 * ratio;
        var whStartX = x - boxSpacer3 - whSpacer2 + boxLmrpW / 2;
        var whStartY = y - boxSpacer1 + boxHeight;

        context.beginPath();
        context.moveTo(whStartX, whStartY);
        context.lineTo(whStartX, whStartY + whSpacer);
        context.lineTo(whStartX - whSpacer, whStartY + whSpacer);
        context.lineTo(whStartX - whSpacer, whStartY + whSpacer * 2);
        context.lineTo(whStartX + whSpacer * 3, whStartY + whSpacer * 2);
        context.lineTo(whStartX + whSpacer * 3, whStartY + whSpacer);
        context.lineTo(whStartX + whSpacer * 2, whStartY + whSpacer);
        context.lineTo(whStartX + whSpacer * 2, whStartY);
        context.lineTo(whStartX, whStartY);
        context.stroke();
        context.fillStyle = BopStack.GreyColor;
        context.fill();
        context.closePath();
        context.restore();

        addRelLinePoint('BlueRigidConduitTop', x + boxW / 2, y - boxSpacer3);
        addRelLinePoint('BlueRigidConduitLeft', x, y - boxSpacer3 + boxH / 2);
        addRelLinePoint('YellowRigidConduitTop', x + boxW + spacer + boxW / 2, y - boxSpacer3);
        addRelLinePoint('YellowRigidConduitRight', x + boxW + spacer + boxW, y - boxSpacer3 + boxH / 2);
    }

    var drawHpuReservoirTank = function (x, y, title) {
        var isDs10 = false;
        var isNEW = false;
        if (title.indexOf('DS10') > 0) {
            title = title.replace('DS10', '');
            isDs10 = true;
        }
        if (title.indexOf('NEW') > 0) {
            title = title.replace('NEW', '');
            isNEW = true;
        }
        x *= ratio;
        y *= ratio;
        var w = 60 * ratio;
        var h = 248;
        var r = 8 * ratio;
        var labelSize = (14 * ratio) + 'px';
        var ySpacer = 6 * ratio;
        var spacer = 8 * ratio;
        context.save();
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
        context.fillText(title, x, y - ySpacer);
        y += spacer + ySpacer;
        drawRoundRect(x, y, w, h, r);
        addRelLinePoint('ReservoirTop', x, y + 5);

        // Filler Indicator
        var minReservoir = BopUtility.getSnapshot(configurationData, 'reservoir Min', true);
        var maxReservoir = BopUtility.getSnapshot(configurationData, 'reservoir Max', true);
        var capacityReservoir = parseInt(maxReservoir) - parseInt(minReservoir);
        var reservoirKey = getSnapshotKey('ReservoirTank');
        var snapshot = BopUtility.getSnapshot(data, reservoirKey, true);
        var currentReservoir = snapshot ? Math.round(snapshot.value) : '-';
        var uom = snapshot ? snapshot.uom : '-';
        var currentCapacity = (currentReservoir / capacityReservoir);
        var capacityUsed = 1 - currentCapacity;
        var capacitySpacer = (h - (spacer * 2)) / 100;
        var spacer2 = (capacityUsed * capacitySpacer * 100);
        var yWithSpacer = y + spacer;
        var currentY = yWithSpacer + spacer2;
        var barHeight = (h - (spacer * 2));
        var barH = barHeight - spacer2;

        // >= 98% == HIGH ALARM <= 30.9% == LOW ALARM OTHERWISE OKAY
        context.fillStyle = currentCapacity > 0.309 ? BopStack.GreenColor : BopStack.RedColor;
        context.fillRect(x + spacer, currentY, w - spacer * 2, barH); // Current Capacity
        context.strokeRect(x + spacer, yWithSpacer, w - spacer * 2, barHeight); // 100% Capacity

        // Draw 98% line and 30.9% line
        context.beginPath();
        var twoPercentSpacer = 0.02 * barHeight;
        var sixtyNinePercentSpacer = 0.691 * barHeight;
        var xSpacerText = 2 * ratio;
        var xSpacerText2 = 32 * ratio;
        var ySpacerText = 12 * ratio;
        context.setLineDash([5, 3]);
        context.moveTo(x + spacer, yWithSpacer + twoPercentSpacer);
        context.lineTo(x + w - spacer, yWithSpacer + twoPercentSpacer);
        context.fillStyle = '#000';
        context.fillText('98%', x + spacer + xSpacerText, yWithSpacer + twoPercentSpacer + ySpacerText);
        context.fillStyle = '#d9d9d9';
        if (!isDs10 || !isNEW) {
            context.fillText('HLA', x - xSpacerText2, yWithSpacer + twoPercentSpacer + ySpacerText);
        }
        context.moveTo(x + spacer, yWithSpacer + sixtyNinePercentSpacer);
        context.lineTo(x + w - spacer, yWithSpacer + sixtyNinePercentSpacer);
        context.fillStyle = '#000';
        context.fillText('30.9%', x + spacer + xSpacerText, yWithSpacer + sixtyNinePercentSpacer + ySpacerText);
        context.fillStyle = '#d9d9d9';
        if (!isDs10 || !isNEW) {
            context.fillText('LLA', x - xSpacerText2, yWithSpacer + sixtyNinePercentSpacer + ySpacerText);
        }
        context.stroke();
        context.closePath();
        context.fillStyle = '#FFF';

        if (snapshot) {
            context.fillText(currentReservoir + ' ' + uom, x, y - ySpacer);
        } else if (!isHpuFirstTimeLoad()) {
            var wBadData = 70 * ratio;
            var hBadData = 18 * ratio;
            var badDataSpacer = 14 * ratio;
            context.fillStyle = BopStack.BadDataColor;
            context.fillRect(x, y - ySpacer - badDataSpacer, wBadData, hBadData);
            context.fillStyle = '#000';
            context.fillText('BAD DATA', x, y - ySpacer);
        }
        context.restore();
    }
    // X1, Y1 is starting point. X2, Y2 is end point.
    var drawArrow = function (x1, y1, x2, y2) {
        context.save();
        context.lineWidth = 2;
        var isVerticalLine = x1 === x2;
        var xSpacer = 6;
        var ySpacer = 6;
        context.strokeStyle = "white";

        if (isVerticalLine) {
            var yDistance = Math.abs(y2 - y1) / 5;
            var yCenter = yDistance * 2;
            context.beginPath();
            context.moveTo(x1 - xSpacer, y1 + yCenter);
            context.lineTo(x1, y1 + yCenter + ySpacer);
            context.closePath();
            context.stroke();

            context.beginPath();
            context.moveTo(x1 + xSpacer, y1 + yCenter);
            context.lineTo(x1, y1 + yCenter + ySpacer);
            context.closePath();
            context.stroke();
        } else {
            var xDistance = Math.abs(x2 - x1) / 5;
            var xCenter = xDistance * 2;
            context.beginPath();
            context.moveTo(x1 + xCenter, y1);
            context.lineTo(x1 + xCenter + xSpacer, y1 - ySpacer);
            context.closePath();
            context.stroke();

            context.beginPath();
            context.moveTo(x1 + xCenter, y1);
            context.lineTo(x1 + xCenter + xSpacer, y1 + ySpacer);
            context.closePath();
            context.stroke();
        }

        context.restore();
    }

    var drawMotor = function (x, y, index, isException) {
        isException = (typeof isException !== 'undefined') ? isException : false;
        x *= ratio;
        y *= ratio;
        var labelSize = (16 * ratio) + 'px';
        var key = '';
        var runKey = '';
        var isChargePump = false;

        switch (index) {
            case 0: // Charge 1
                key = getSnapshotKey('ChargePump1');
                runKey = getSnapshotKey('ChargePump1Run');
                // Draw box container and title
                var rectWidth = 540 * ratio;
                var rectHeight = 220 + (80 * ratio);
                var ySpacer = 10 * ratio;
                context.save();
                context.setLineDash([10]);
                drawRoundRect(x - 120 * ratio, 2, rectWidth, rectHeight, 8, '#000000', defaultColor);
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                var hpuWorking = BopUtility.getSnapshot(configurationData, 'hpu Working PSI', true);
                context.fillStyle = "white";
                context.fillText('Hydraulic Power Unit (' + hpuWorking + ')', x + (rectWidth / 8), y - ySpacer);
                context.restore();
                isChargePump = true;
                break;
            case 1: // Charge 2
                key = getSnapshotKey('ChargePump2');
                runKey = getSnapshotKey('ChargePump2Run');
                isChargePump = true;
                break;
            case 2: // HPU 1
                key = getSnapshotKey('Hpu1');
                runKey = getSnapshotKey('Hpu1Run');
                break;
            case 3: // HPU 2
                key = getSnapshotKey('Hpu2');
                runKey = getSnapshotKey('Hpu2Run');
                break;
            case 4: // Boost Pump 1
                key = getSnapshotKey('Hbu1');
                runKey = getSnapshotKey('Hbu1Run');
                break;
            case 5: // Boost Pump 2
                key = getSnapshotKey('Hbu2');
                runKey = getSnapshotKey('Hbu2Run');
                break;
            case 6: // HPU 3 ---Only used for DS10 currently
                key = getSnapshotKey('Hpu3');
                runKey = getSnapshotKey('Hpu3Run');
                // Draw box container and title
                var rectWidth = 800 * ratio;
                var rectHeight = 220 + (80 * ratio);
                var ySpacer = 50 * ratio;
                context.save();
                context.setLineDash([10]);
                drawRoundRect(x - 80 * ratio, 2, rectWidth, rectHeight, 8, '#000000', defaultColor);
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                var hpuWorking = BopUtility.getSnapshot(configurationData, 'hpu Working PSI', true);
                context.fillStyle = "white";
                context.fillText('Hydraulic Power Unit (' + hpuWorking + ')', x + (rectWidth / 8), y - ySpacer);
                context.restore();
                break;
        }
        var snapshot = BopUtility.getSnapshot(data, key, true);
        var snapshotValue = snapshot ? BopUtility.round5(snapshot.value) : '-';
        var uom = snapshot ? snapshot.uom : '-';
        var snapshotRun = BopUtility.getSnapshot(data, runKey, true);
        var snapshotRunValue = snapshotRun ? snapshotRun.value : 0;
        context.save();
        context.beginPath();
        y += 20;

        if (isChargePump) {
            context.scale(0.7, 0.7);
            x = x + (0.44 * x);
            y = y + (0.44 * y);
        }
        var smallWidth = 50;
        var smallHeight = 15;
        var width = 100;
        var height = 60;
        var width2 = 25;
        var spacer = 3;
        var spacer2 = 25;
        var spacer3 = 5;
        var spacer4 = 22;
        var spacer5 = 10;
        var spacer6 = (motorNameArr[index].length * 8) * ratio;
        var spacer7 = 80 * ratio;
        var spacer8 = 70 * ratio;
        labelSize = (14 * ratio) + 'px';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
        context.fillStyle = '#FFF';
        context.fillText(motorNameArr[index], x - (spacer6), y + spacer5);
        context.fillStyle = defaultColor;
        var prevY = y + spacer + smallHeight;
        var rightRectangleY = prevY + spacer3;
        drawMotorBodyIndicator(x, prevY, smallHeight, spacer, spacer5, width, snapshotRunValue);
        context.fillRect(x, y, smallWidth, smallHeight); // Top Rectangle
        context.fillRect(x - spacer2 - spacer - smallHeight, prevY + spacer3, smallHeight, height - spacer3 * 2); // Left Rectangle
        context.fillRect(x - spacer2 - spacer * 2 - smallHeight - width2, prevY + spacer4, width2, height - spacer4 * 2); // Left Small Rectangle
        context.fillRect(x + width + spacer - spacer2, rightRectangleY, smallHeight, height - spacer3 * 2); // Right Rectangle
        context.strokeRect(x, y, smallWidth, smallHeight); // Top Rectangle
        context.strokeRect(x - spacer2 - spacer - smallHeight, prevY + spacer3, smallHeight, height - spacer3 * 2); // Left Rectangle
        context.strokeRect(x - spacer2 - spacer * 2 - smallHeight - width2, prevY + spacer4, width2, height - spacer4 * 2); // Left Small Rectangle
        context.strokeRect(x + width + spacer - spacer2, rightRectangleY, smallHeight, height - spacer3 * 2); // Right Rectangle

        prevY += height + spacer;
        context.fillRect(x + spacer3 - spacer2, prevY, width - spacer5, smallHeight); // Bottom Rectangle
        context.strokeRect(x + spacer3 - spacer2, prevY, width - spacer5, smallHeight); // Bottom Rectangle
        context.fillStyle = '#FFF';

        var labelXPos = index < 4 ? x - spacer7 : x + spacer8;
        var labelYPos = prevY + spacer5;

        if (snapshot && snapshot.value !== -1 && !isException) {
            context.fillText(snapshotValue + ' ' + uom, labelXPos, labelYPos);
        } else if (!isHpuFirstTimeLoad() && !isException) {
            var wBadData = 70 * ratio;
            context.fillStyle = BopStack.BadDataColor;
            context.fillRect(labelXPos, prevY - spacer5, wBadData, width2);
            context.fillStyle = '#FFF';
            context.fillText('BAD DATA', labelXPos, labelYPos);
        }
        var pumpRightX = x + width + spacer - spacer2 + smallHeight;
        var pumpRightY = rightRectangleY + (height - spacer3 * 2) / 2;
        var pumpTopX = x + smallWidth / 2;
        var pumpTopY = y;
        var pumpBottomX = x + spacer3 - spacer2 + (width - spacer5) / 2;
        var pumpBottomY = prevY + smallHeight;

        if (isChargePump) {
            pumpTopX = (x - 0.3 * x) + 17.5;
            pumpTopY = y - 0.3 * y;
            pumpRightX = pumpRightX * 0.7;
            pumpRightY = pumpRightY * 0.7;
            pumpBottomX = pumpBottomX * 0.7;
            pumpBottomY = pumpBottomY * 0.7;
        }
        addRelLinePoint('PumpTop' + index, pumpTopX, pumpTopY);
        addRelLinePoint('PumpBottom' + index, pumpBottomX, pumpBottomY);
        addRelLinePoint("PumpRight" + index, pumpRightX, pumpRightY);
        context.restore();
    };

    var drawHbuMotor = function (x, y, index) {
        if (index === 0) {
            var rectWidth = 235 * ratio;
            var rectHeight = 200 + (80 * ratio);
            var ySpacer = 10 * ratio;
            var labelSize = (16 * ratio) + 'px';
            var xSpacer = 105;
            var xSpacer2 = 5;
            context.save();
            context.setLineDash([10]);

            drawRoundRect(x - xSpacer, 2, rectWidth, rectHeight, 8, '#000', defaultColor);
            context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
            var hbuWorking = BopUtility.getSnapshot(configurationData, 'hbu Working PSI', true);
            context.fillStyle = "white";
            context.fillText('Hydraulic Boost Unit (' + hbuWorking + ')', x - xSpacer + xSpacer2, y - ySpacer);
            context.restore();
        }
        drawMotor(x, y, index + 4);
    }

    var drawDS10RelationshipLines = function () {
        var yHpu = 247 * ratio;
        var spacer1 = 220 - (170 * ratio);
        var spacer2 = 35 * ratio;
        var spacer3 = 50 * ratio;
        context.save();
        context.beginPath();
        // Line from Reservoir to Charge Pumps
        var reservoirTop = getRelLinePoint('ReservoirTop');
        var hpuPumpTop0 = getRelLinePoint('PumpTop3');
        var hpuPumpTop1 = getRelLinePoint('PumpTop2');
        var hpuPumpTop2 = getRelLinePoint('PumpTop6');
        var hpuPumpRight0 = getRelLinePoint('PumpRight3');
        var hpuPumpRight1 = getRelLinePoint('PumpRight2');
        var hpuPumpRight2 = getRelLinePoint('PumpRight6');
        context.moveTo(hpuPumpRight1.x, hpuPumpRight1.y);
        //context.lineTo(reservoirTop.x, hpuPumpRight1.y);

        context.moveTo(reservoirTop.x, reservoirTop.y + 50);
        context.lineTo(hpuPumpTop1.x, reservoirTop.y + 50);
        context.lineTo(hpuPumpTop1.x, hpuPumpTop1.y);
        context.moveTo(hpuPumpTop1.x, reservoirTop.y + 50);
        context.lineTo(hpuPumpTop0.x, reservoirTop.y + 50);
        context.lineTo(hpuPumpTop0.x, hpuPumpTop0.y);
        context.moveTo(hpuPumpTop0.x, reservoirTop.y + 50);
        context.lineTo(hpuPumpTop2.x, reservoirTop.y + 50);
        context.lineTo(hpuPumpTop2.x, hpuPumpTop2.y);

        // HPU Charge Pump Lines
        var hpuPumpBottom0 = getRelLinePoint('PumpBottom3');
        var hpuPumpBottom1 = getRelLinePoint('PumpBottom2');
        var hpuPumpBottom2 = getRelLinePoint('PumpBottom6');
        //var hpuPumpBottom3 = getRelLinePoint('PumpBottom3');
        var surfaceAccumulatorRight = getRelLinePoint('SurfaceAccumulatorRight');
        //var hpuPumpTop2 = getRelLinePoint('PumpTop2');
        var shortLineLength = 60;//hpuPumpTop2.y - hpuPumpBottom0.y - 2;
        context.moveTo(hpuPumpBottom0.x, hpuPumpBottom0.y);
        context.lineTo(hpuPumpBottom0.x, hpuPumpBottom0.y + shortLineLength);
        context.moveTo(hpuPumpBottom1.x, hpuPumpBottom1.y);
        context.lineTo(hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength);
        context.moveTo(hpuPumpBottom2.x, hpuPumpBottom2.y);
        context.lineTo(hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength);

        //var shortLineLength3 = surfaceAccumulatorRight.y - hpuPumpBottom2.y;
        //context.moveTo(hpuPumpBottom2.x, hpuPumpBottom2.y);
        //context.lineTo(hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength3);
        //context.moveTo(hpuPumpBottom3.x, hpuPumpBottom3.y);
        //context.lineTo(hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3);

        // Line from HPU to Surface Accumulator
        //context.moveTo(hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3);
        //context.lineTo(surfaceAccumulatorRight.x, hpuPumpBottom3.y + shortLineLength3);
        context.moveTo(hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength);
        context.lineTo(surfaceAccumulatorRight.x, hpuPumpBottom1.y + shortLineLength);

        // Flowmeter line to Rigid Conduit
        var flowTotalizer1Left = getRelLinePoint('FlowTotalizerLeft0'); // Surface Flow Totalizer
        var yRigidConduitTop = getRelLinePoint('YellowRigidConduitTop');
        var bRigidConduitTop = getRelLinePoint('BlueRigidConduitTop');
        context.moveTo(flowTotalizer1Left.x, flowTotalizer1Left.y);
        context.lineTo(flowTotalizer1Left.x - spacer2, flowTotalizer1Left.y);
        context.lineTo(flowTotalizer1Left.x - spacer2, yHpu + spacer1 + spacer3);
        context.lineTo(yRigidConduitTop.x, yHpu + spacer1 + spacer3);
        context.lineTo(yRigidConduitTop.x, yRigidConduitTop.y);
        context.moveTo(bRigidConduitTop.x, yHpu + spacer1 + spacer3);
        context.lineTo(bRigidConduitTop.x, bRigidConduitTop.y);

        // Line from Rigid Conduit to Subsea Accumulator
        var spacer21 = 20 * ratio;
        var yRigidConduitRight = getRelLinePoint('YellowRigidConduitRight');
        var bRigidConduitLeft = getRelLinePoint('BlueRigidConduitLeft');
        var subseaAccumulatorLeft = getRelLinePoint('SubseaAccumulatorLeft');
        var subseaAccumulatorRight = getRelLinePoint('SubseaAccumulatorRight');

        context.moveTo(bRigidConduitLeft.x, bRigidConduitLeft.y);
        context.lineTo(bRigidConduitLeft.x - spacer21, bRigidConduitLeft.y);
        context.lineTo(bRigidConduitLeft.x - spacer21, subseaAccumulatorLeft.y);
        context.lineTo(subseaAccumulatorLeft.x, subseaAccumulatorLeft.y);

        context.moveTo(yRigidConduitRight.x, yRigidConduitRight.y);
        context.lineTo(yRigidConduitRight.x + spacer21, yRigidConduitRight.y);
        context.lineTo(yRigidConduitRight.x + spacer21, subseaAccumulatorRight.y);
        context.lineTo(subseaAccumulatorRight.x, subseaAccumulatorRight.y);

        // Line from Boost Pump 1 to Flow Totalizer
        //var boostPumpRight1 = getRelLinePoint('PumpRight4');
       // var boostPumpRight2 = getRelLinePoint('PumpRight5');
        //var flowTotalizer2Top = getRelLinePoint('FlowTotalizerTop1'); // HBU Flow Totalizer
        //var shortLineLength2 = flowTotalizer2Top.x - boostPumpRight1.x;

        // Line from Boost Pump to HBU Flow Totalizer
        //context.moveTo(boostPumpRight2.x, boostPumpRight2.y);
        //context.lineTo(boostPumpRight2.x + shortLineLength2, boostPumpRight2.y);
        //context.moveTo(boostPumpRight1.x, boostPumpRight1.y);
        //context.lineTo(boostPumpRight1.x + shortLineLength2, boostPumpRight1.y);
        //context.lineTo(boostPumpRight1.x + shortLineLength2, flowTotalizer2Top.y);

        // Line from HBU Flow Totalizer to Subsea Accumulator
       // var flowTotalizer2Bottom = getRelLinePoint('FlowTotalizerBottom1'); // HBU Flow Totalizer
        //context.moveTo(flowTotalizer2Bottom.x, flowTotalizer2Bottom.y);
        //context.lineTo(flowTotalizer2Bottom.x, subseaAccumulatorLeft.y);
        //context.lineTo(subseaAccumulatorLeft.x, subseaAccumulatorLeft.y);

        // Stroke all lines
        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = "white";
        context.stroke();
        context.closePath();
        context.restore();

        // Arrows
        drawArrow(hpuPumpRight0.x - 170, reservoirTop.y + 50, reservoirTop.x, reservoirTop.y + 50); // Reservoir to Charge Pump 1 Arrow
        drawArrow(hpuPumpRight1.x - 50, reservoirTop.y + 50, reservoirTop.x, reservoirTop.y + 50);
        drawArrow(hpuPumpRight2.x - 300, reservoirTop.y + 50, reservoirTop.x, reservoirTop.y + 50);

        //drawArrow(hpuPumpTop0.x, hpuPumpTop0.y, hpuPumpTop0.x, hpuPumpTop0.y - 200);
        //drawArrow(hpuPumpBottom1.x, hpuPumpBottom1.y, hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength / 2);
        //drawArrow(hpuPumpBottom2.x, hpuPumpBottom2.y, hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength / 2);

        drawArrow(hpuPumpBottom0.x, hpuPumpBottom0.y, hpuPumpBottom0.x, hpuPumpBottom0.y + shortLineLength / 2); // HPU 1 to Surface Accumulator Arrow
        drawArrow(hpuPumpBottom1.x, hpuPumpBottom1.y, hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength / 2); // HPU 2 to Surface Accumulator Arrow
        drawArrow(hpuPumpBottom2.x, hpuPumpBottom2.y, hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength / 2); // HPU 3 to Surface Accumulator Arrow
        //drawArrow(surfaceAccumulatorRight.x, hpuPumpBottom3.y + shortLineLength3,
        //    hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3); // HPU to Subsea Accumulators Arrow
        drawArrow(yRigidConduitTop.x, yHpu + spacer1 + spacer3,
            yRigidConduitTop.x, yRigidConduitTop.y); // Flow Totalizer to Yellow Rigid Conduit Arrow
        drawArrow(bRigidConduitTop.x, yHpu + spacer1 + spacer3,
            bRigidConduitTop.x, bRigidConduitTop.y); // Flow Totalizer to Blue Rigid Conduit Arrow
        drawArrow(bRigidConduitLeft.x - spacer21, bRigidConduitLeft.y,
            bRigidConduitLeft.x - spacer21, subseaAccumulatorLeft.y); // Blue Rigid Conduit to Subsea Accumulator Arrow
        drawArrow(yRigidConduitRight.x + spacer21, yRigidConduitRight.y,
            yRigidConduitRight.x + spacer21, subseaAccumulatorRight.y); // Yellow Rigid Conduit to Subsea Accumulator Arrow
        //drawArrow(boostPumpRight1.x + shortLineLength2, boostPumpRight1.y,
        //    boostPumpRight1.x + shortLineLength2, flowTotalizer2Top.y); // Boost Pump to Flow Totalizer Arrow
        //drawArrow(flowTotalizer2Bottom.x, flowTotalizer2Bottom.y, flowTotalizer2Bottom.x, subseaAccumulatorLeft.y); // HBU Flow Totalizer to Subsea Accumulator Arrow
    };

    var drawNEWRelationshipLines = function () {
        var yHpu = 247 * ratio;
        var spacer1 = 220 - (170 * ratio);
        var spacer2 = 35 * ratio;
        var spacer3 = 50 * ratio;
        context.save();
        context.beginPath();
        // Line from Reservoir to Charge Pumps
        var reservoirTop = getRelLinePoint('ReservoirTop');
        var hpuPumpTop0 = getRelLinePoint('PumpTop0');
        var hpuPumpRight1 = getRelLinePoint('PumpRight1');
        context.moveTo(hpuPumpRight1.x, hpuPumpRight1.y);
        context.lineTo(reservoirTop.x, hpuPumpRight1.y);

        context.moveTo(reservoirTop.x, reservoirTop.y);
        context.lineTo(hpuPumpTop0.x, reservoirTop.y);
        context.lineTo(hpuPumpTop0.x, hpuPumpTop0.y);

        // HPU Charge Pump Lines
        var hpuPumpBottom0 = getRelLinePoint('PumpBottom0');
        var hpuPumpBottom1 = getRelLinePoint('PumpBottom1');
        var hpuPumpBottom2 = getRelLinePoint('PumpBottom2');
        var hpuPumpBottom3 = getRelLinePoint('PumpBottom3');
        var surfaceAccumulatorRight = getRelLinePoint('SurfaceAccumulatorRight');
        var hpuPumpTop2 = getRelLinePoint('PumpTop2');
        var shortLineLength = hpuPumpTop2.y - hpuPumpBottom0.y - 2;
        context.moveTo(hpuPumpBottom0.x, hpuPumpBottom0.y);
        context.lineTo(hpuPumpBottom0.x, hpuPumpBottom0.y + shortLineLength);
        context.moveTo(hpuPumpBottom1.x, hpuPumpBottom1.y);
        context.lineTo(hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength);

        var shortLineLength3 = surfaceAccumulatorRight.y - hpuPumpBottom2.y;
        context.moveTo(hpuPumpBottom2.x, hpuPumpBottom2.y);
        context.lineTo(hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength3);
        context.moveTo(hpuPumpBottom3.x, hpuPumpBottom3.y);
        context.lineTo(hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3);

        // Line from HPU to Surface Accumulator
        context.moveTo(hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3);
        context.lineTo(surfaceAccumulatorRight.x, hpuPumpBottom3.y + shortLineLength3);
        // Flowmeter line to Rigid Conduit
        var flowTotalizer1Left = getRelLinePoint('FlowTotalizerLeft0'); // Surface Flow Totalizer
        var yRigidConduitTop = getRelLinePoint('YellowRigidConduitTop');
        var bRigidConduitTop = getRelLinePoint('BlueRigidConduitTop');
        context.moveTo(flowTotalizer1Left.x, flowTotalizer1Left.y);
        context.lineTo(flowTotalizer1Left.x - spacer2, flowTotalizer1Left.y);
        context.lineTo(flowTotalizer1Left.x - spacer2, yHpu + spacer1 + spacer3);
        context.lineTo(yRigidConduitTop.x, yHpu + spacer1 + spacer3);
        context.lineTo(yRigidConduitTop.x, yRigidConduitTop.y);
        context.moveTo(bRigidConduitTop.x, yHpu + spacer1 + spacer3);
        context.lineTo(bRigidConduitTop.x, bRigidConduitTop.y);

        // Line from Rigid Conduit to Subsea Accumulator
        var spacer21 = 20 * ratio;
        var yRigidConduitRight = getRelLinePoint('YellowRigidConduitRight');
        var bRigidConduitLeft = getRelLinePoint('BlueRigidConduitLeft');
        var subseaAccumulatorLeft = getRelLinePoint('SubseaAccumulatorLeft');
        var subseaAccumulatorRight = getRelLinePoint('SubseaAccumulatorRight');

        context.moveTo(bRigidConduitLeft.x, bRigidConduitLeft.y);
        context.lineTo(bRigidConduitLeft.x - spacer21, bRigidConduitLeft.y);
        context.lineTo(bRigidConduitLeft.x - spacer21, subseaAccumulatorLeft.y);
        context.lineTo(subseaAccumulatorLeft.x, subseaAccumulatorLeft.y);

        context.moveTo(yRigidConduitRight.x, yRigidConduitRight.y);
        context.lineTo(yRigidConduitRight.x + spacer21, yRigidConduitRight.y);
        context.lineTo(yRigidConduitRight.x + spacer21, subseaAccumulatorRight.y);
        context.lineTo(subseaAccumulatorRight.x, subseaAccumulatorRight.y);

        // Line from Boost Pump 1 to Flow Totalizer
        //var boostPumpRight1 = getRelLinePoint('PumpRight4');
        //var boostPumpRight2 = getRelLinePoint('PumpRight5');
        //var flowTotalizer2Top = getRelLinePoint('FlowTotalizerTop1'); // HBU Flow Totalizer
        //var shortLineLength2 = flowTotalizer2Top.x - boostPumpRight1.x;

        // Line from Boost Pump to HBU Flow Totalizer
        //context.moveTo(boostPumpRight2.x, boostPumpRight2.y);
        //context.lineTo(boostPumpRight2.x + shortLineLength2, boostPumpRight2.y);
        //context.moveTo(boostPumpRight1.x, boostPumpRight1.y);
        //context.lineTo(boostPumpRight1.x + shortLineLength2, boostPumpRight1.y);
        //context.lineTo(boostPumpRight1.x + shortLineLength2, flowTotalizer2Top.y);

        // Line from HBU Flow Totalizer to Subsea Accumulator
        //var flowTotalizer2Bottom = getRelLinePoint('FlowTotalizerBottom1'); // HBU Flow Totalizer
        //context.moveTo(flowTotalizer2Bottom.x, flowTotalizer2Bottom.y);
        //context.lineTo(flowTotalizer2Bottom.x, subseaAccumulatorLeft.y);
        //context.lineTo(subseaAccumulatorLeft.x, subseaAccumulatorLeft.y);

        // Stroke all lines
        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = "white";
        context.stroke();
        context.closePath();
        context.restore();

        // Arrows
        drawArrow(hpuPumpRight1.x, hpuPumpRight1.y, reservoirTop.x, hpuPumpRight1.y); // Reservoir to Charge Pump 1 Arrow
        drawArrow(hpuPumpTop0.x, reservoirTop.y, reservoirTop.x, reservoirTop.y); // Reservoir to Charge Pump 2 Arrow
        drawArrow(hpuPumpBottom0.x, hpuPumpBottom0.y, hpuPumpBottom0.x, hpuPumpBottom0.y + shortLineLength); // Charge Pump 1 to HPU 1 Arrow
        drawArrow(hpuPumpBottom1.x, hpuPumpBottom1.y, hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength); // Charge Pump 2 to HPU 2 Arrow
        drawArrow(hpuPumpBottom2.x, hpuPumpBottom2.y, hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength / 2); // HPU 1 to Surface Accumulator Arrow
        drawArrow(hpuPumpBottom3.x, hpuPumpBottom3.y, hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength / 2); // HPU 2 to Surface Accumulator Arrow
        drawArrow(surfaceAccumulatorRight.x, hpuPumpBottom3.y + shortLineLength3,
            hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3); // HPU to Subsea Accumulators Arrow
        drawArrow(yRigidConduitTop.x, yHpu + spacer1 + spacer3,
            yRigidConduitTop.x, yRigidConduitTop.y); // Flow Totalizer to Yellow Rigid Conduit Arrow
        drawArrow(bRigidConduitTop.x, yHpu + spacer1 + spacer3,
            bRigidConduitTop.x, bRigidConduitTop.y); // Flow Totalizer to Blue Rigid Conduit Arrow
        drawArrow(bRigidConduitLeft.x - spacer21, bRigidConduitLeft.y,
            bRigidConduitLeft.x - spacer21, subseaAccumulatorLeft.y); // Blue Rigid Conduit to Subsea Accumulator Arrow
        drawArrow(yRigidConduitRight.x + spacer21, yRigidConduitRight.y,
            yRigidConduitRight.x + spacer21, subseaAccumulatorRight.y); // Yellow Rigid Conduit to Subsea Accumulator Arrow
        //drawArrow(boostPumpRight1.x + shortLineLength2, boostPumpRight1.y,
        //    boostPumpRight1.x + shortLineLength2, flowTotalizer2Top.y); // Boost Pump to Flow Totalizer Arrow
        drawArrow(flowTotalizer2Bottom.x, flowTotalizer2Bottom.y, flowTotalizer2Bottom.x, subseaAccumulatorLeft.y); // HBU Flow Totalizer to Subsea Accumulator Arrow
    }; ///NEW

    var drawRelationshipLines = function () {
        var yHpu = 247 * ratio;
        var spacer1 = 220 - (170 * ratio);
        var spacer2 = 35 * ratio;
        var spacer3 = 50 * ratio;
        context.save();
        context.beginPath();
        // Line from Reservoir to Charge Pumps
        var reservoirTop = getRelLinePoint('ReservoirTop');
        var hpuPumpTop0 = getRelLinePoint('PumpTop0');
        var hpuPumpRight1 = getRelLinePoint('PumpRight1');
        context.moveTo(hpuPumpRight1.x, hpuPumpRight1.y);
        context.lineTo(reservoirTop.x, hpuPumpRight1.y);

        context.moveTo(reservoirTop.x, reservoirTop.y);
        context.lineTo(hpuPumpTop0.x, reservoirTop.y);
        context.lineTo(hpuPumpTop0.x, hpuPumpTop0.y);

        // HPU Charge Pump Lines
        var hpuPumpBottom0 = getRelLinePoint('PumpBottom0');
        var hpuPumpBottom1 = getRelLinePoint('PumpBottom1');
        var hpuPumpBottom2 = getRelLinePoint('PumpBottom2');
        var hpuPumpBottom3 = getRelLinePoint('PumpBottom3');
        var surfaceAccumulatorRight = getRelLinePoint('SurfaceAccumulatorRight');
        var hpuPumpTop2 = getRelLinePoint('PumpTop2');
        var shortLineLength = hpuPumpTop2.y - hpuPumpBottom0.y - 2;
        context.moveTo(hpuPumpBottom0.x, hpuPumpBottom0.y);
        context.lineTo(hpuPumpBottom0.x, hpuPumpBottom0.y + shortLineLength);
        context.moveTo(hpuPumpBottom1.x, hpuPumpBottom1.y);
        context.lineTo(hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength);

        var shortLineLength3 = surfaceAccumulatorRight.y - hpuPumpBottom2.y;
        context.moveTo(hpuPumpBottom2.x, hpuPumpBottom2.y);
        context.lineTo(hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength3);
        context.moveTo(hpuPumpBottom3.x, hpuPumpBottom3.y);
        context.lineTo(hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3);

        // Line from HPU to Surface Accumulator
        context.moveTo(hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3);
        context.lineTo(surfaceAccumulatorRight.x, hpuPumpBottom3.y + shortLineLength3);
        // Flowmeter line to Rigid Conduit
        var flowTotalizer1Left = getRelLinePoint('FlowTotalizerLeft0'); // Surface Flow Totalizer
        var yRigidConduitTop = getRelLinePoint('YellowRigidConduitTop');
        var bRigidConduitTop = getRelLinePoint('BlueRigidConduitTop');
        context.moveTo(flowTotalizer1Left.x, flowTotalizer1Left.y);
        context.lineTo(flowTotalizer1Left.x - spacer2, flowTotalizer1Left.y);
        context.lineTo(flowTotalizer1Left.x - spacer2, yHpu + spacer1 + spacer3);
        context.lineTo(yRigidConduitTop.x, yHpu + spacer1 + spacer3);
        context.lineTo(yRigidConduitTop.x, yRigidConduitTop.y);
        context.moveTo(bRigidConduitTop.x, yHpu + spacer1 + spacer3);
        context.lineTo(bRigidConduitTop.x, bRigidConduitTop.y);

        // Line from Rigid Conduit to Subsea Accumulator
        var spacer21 = 20 * ratio;
        var yRigidConduitRight = getRelLinePoint('YellowRigidConduitRight');
        var bRigidConduitLeft = getRelLinePoint('BlueRigidConduitLeft');
        var subseaAccumulatorLeft = getRelLinePoint('SubseaAccumulatorLeft');
        var subseaAccumulatorRight = getRelLinePoint('SubseaAccumulatorRight');

        context.moveTo(bRigidConduitLeft.x, bRigidConduitLeft.y);
        context.lineTo(bRigidConduitLeft.x - spacer21, bRigidConduitLeft.y);
        context.lineTo(bRigidConduitLeft.x - spacer21, subseaAccumulatorLeft.y);
        context.lineTo(subseaAccumulatorLeft.x, subseaAccumulatorLeft.y);

        context.moveTo(yRigidConduitRight.x, yRigidConduitRight.y);
        context.lineTo(yRigidConduitRight.x + spacer21, yRigidConduitRight.y);
        context.lineTo(yRigidConduitRight.x + spacer21, subseaAccumulatorRight.y);
        context.lineTo(subseaAccumulatorRight.x, subseaAccumulatorRight.y);

        // Line from Boost Pump 1 to Flow Totalizer
        var boostPumpRight1 = getRelLinePoint('PumpRight4');
        var boostPumpRight2 = getRelLinePoint('PumpRight5');
        var flowTotalizer2Top = getRelLinePoint('FlowTotalizerTop1'); // HBU Flow Totalizer
        var shortLineLength2 = flowTotalizer2Top.x - boostPumpRight1.x;

        // Line from Boost Pump to HBU Flow Totalizer
        context.moveTo(boostPumpRight2.x, boostPumpRight2.y);
        context.lineTo(boostPumpRight2.x + shortLineLength2, boostPumpRight2.y);
        context.moveTo(boostPumpRight1.x, boostPumpRight1.y);
        context.lineTo(boostPumpRight1.x + shortLineLength2, boostPumpRight1.y);
        context.lineTo(boostPumpRight1.x + shortLineLength2, flowTotalizer2Top.y);

        // Line from HBU Flow Totalizer to Subsea Accumulator
        var flowTotalizer2Bottom = getRelLinePoint('FlowTotalizerBottom1'); // HBU Flow Totalizer
        context.moveTo(flowTotalizer2Bottom.x, flowTotalizer2Bottom.y);
        context.lineTo(flowTotalizer2Bottom.x, subseaAccumulatorLeft.y);
        context.lineTo(subseaAccumulatorLeft.x, subseaAccumulatorLeft.y);

        // Stroke all lines
        context.lineWidth = 2;
        context.lineCap = 'round';
        context.strokeStyle = "white";
        context.stroke();
        context.closePath();
        context.restore();

        // Arrows
        drawArrow(hpuPumpRight1.x, hpuPumpRight1.y, reservoirTop.x, hpuPumpRight1.y); // Reservoir to Charge Pump 1 Arrow
        drawArrow(hpuPumpTop0.x, reservoirTop.y, reservoirTop.x, reservoirTop.y); // Reservoir to Charge Pump 2 Arrow
        drawArrow(hpuPumpBottom0.x, hpuPumpBottom0.y, hpuPumpBottom0.x, hpuPumpBottom0.y + shortLineLength); // Charge Pump 1 to HPU 1 Arrow
        drawArrow(hpuPumpBottom1.x, hpuPumpBottom1.y, hpuPumpBottom1.x, hpuPumpBottom1.y + shortLineLength); // Charge Pump 2 to HPU 2 Arrow
        drawArrow(hpuPumpBottom2.x, hpuPumpBottom2.y, hpuPumpBottom2.x, hpuPumpBottom2.y + shortLineLength / 2); // HPU 1 to Surface Accumulator Arrow
        drawArrow(hpuPumpBottom3.x, hpuPumpBottom3.y, hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength / 2); // HPU 2 to Surface Accumulator Arrow
        drawArrow(surfaceAccumulatorRight.x, hpuPumpBottom3.y + shortLineLength3,
            hpuPumpBottom3.x, hpuPumpBottom3.y + shortLineLength3); // HPU to Subsea Accumulators Arrow
        drawArrow(yRigidConduitTop.x, yHpu + spacer1 + spacer3,
            yRigidConduitTop.x, yRigidConduitTop.y); // Flow Totalizer to Yellow Rigid Conduit Arrow
        drawArrow(bRigidConduitTop.x, yHpu + spacer1 + spacer3,
            bRigidConduitTop.x, bRigidConduitTop.y); // Flow Totalizer to Blue Rigid Conduit Arrow
        drawArrow(bRigidConduitLeft.x - spacer21, bRigidConduitLeft.y,
            bRigidConduitLeft.x - spacer21, subseaAccumulatorLeft.y); // Blue Rigid Conduit to Subsea Accumulator Arrow
        drawArrow(yRigidConduitRight.x + spacer21, yRigidConduitRight.y,
            yRigidConduitRight.x + spacer21, subseaAccumulatorRight.y); // Yellow Rigid Conduit to Subsea Accumulator Arrow
        drawArrow(boostPumpRight1.x + shortLineLength2, boostPumpRight1.y,
            boostPumpRight1.x + shortLineLength2, flowTotalizer2Top.y); // Boost Pump to Flow Totalizer Arrow
        drawArrow(flowTotalizer2Bottom.x, flowTotalizer2Bottom.y, flowTotalizer2Bottom.x, subseaAccumulatorLeft.y); // HBU Flow Totalizer to Subsea Accumulator Arrow
    };

    var drawSeaLevel = function (x, y) {
        context.save();
        context.beginPath();
        var ySeaSpacer = 30 * ratio;
        y += ySeaSpacer;
        var xPos = 0;
        var yPos = y - 140;
        var width = context.canvas.width - 30;
        var height = context.canvas.height - yPos;

        context.moveTo(xPos, yPos);
        context.lineTo(width, yPos);
        context.lineWidth = 4;
        context.setLineDash([10]);
        context.strokeStyle = '#004CB3';
        context.stroke();

        context.rect(0, yPos, width, height);
        // add linear gradient
        var grd = context.createLinearGradient(xPos, yPos, 0, context.canvas.height);
        // light blue
        grd.addColorStop(0, '#4dbeff');
        // dark blue
        grd.addColorStop(1, '#00204d');
        context.fillStyle = grd;
        context.fill();
        context.closePath();
        context.restore();
    };

    var drawTitle = function (title) {
        context.save();
        var labelSize = (20 * ratio) + 'px';
        var xPos = 300 * ratio;
        var yPos = 25 * ratio;
        context.fillStyle = '#FFF';
        context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
        context.fillText(title, xPos, yPos);
        context.restore();
    }

    var drawAccumulator = function (x, y, title) {

        if (context) {
            context.save();
            var isSubsea = title.indexOf('Subsea') >= 0;
            var isDS10 = title.indexOf('Conduit') >= 0;
            var ySpacer = 120 / ratio;
            x *= ratio;
            y = (y * ratio) + ySpacer;

            // Tube Coordinate
            var w = 20 * ratio;
            var h = 80 * ratio;
            var r = 8 * ratio;
            var prevY = 0;

            var currentPressureKey = isSubsea ? getSnapshotKey('SubseaAccumulatorReadbackPressure') : getSnapshotKey('SurfaceAccumulator');
            var minPressureKey = isSubsea ? 'subsea Minimum Pressure' : 'surface Minimum Pressure';
            var maxPressureKey = isSubsea ? 'subsea Maximum Pressure' : 'surface Maximum Pressure';
            var minPressureObj = BopUtility.getSnapshot(configurationData, minPressureKey, true);
            var minPressure = minPressureObj ? minPressureObj : '-';
            var maxPressureObj = BopUtility.getSnapshot(configurationData, maxPressureKey, true);
            var maxPressure = maxPressureObj ? maxPressureObj : '-';
            maxPressureSurface = isSubsea ? maxPressureSurface : maxPressure;
            var currentPressureObj = BopUtility.getSnapshot(data, currentPressureKey, true);
            var currentPressure = currentPressureObj ? BopUtility.round5(currentPressureObj.value) : '-';
            var pressureUom = currentPressureObj ? currentPressureObj.uom : '';
            // Inside Tube / Filler Coordinate
            var xT = 5;
            var yT = 5;
            var capacity = currentPressure / (parseInt(maxPressure) - parseInt(minPressure)); // Capacity 1 = 100% full, 0.5 = 50% full, etc.
            var capacitySpacer = (1 - capacity) * 66 * ratio;
            var spacer = 10;
            var xSpacer = 0;
            var labelSize = (16 * ratio) + 'px';
            var nTube = 6;
            var tubeSpacer = 26 * ratio;
            var titleSpacer = spacer * 0.10;
            context.save();
            context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
            context.fillStyle = '#FFF';

            if (!isSubsea) {
                context.fillText(title, x + titleSpacer, y - 5);
            }

            for (var i = 0; i < nTube; i++) {
                xSpacer = tubeSpacer * i;
                drawRoundRect(xSpacer + x, y, w, h, r);

                // Filler. If capacity > 40% then green color otherwise red color
                context.fillStyle = capacity > 0.4 ? greenColor : redColor;
                context.fillRect(xSpacer + x + xT, y + yT + capacitySpacer, w - spacer, h - spacer - capacitySpacer, r);
                context.strokeRect(xSpacer + x + xT, y + yT + capacitySpacer, w - spacer, h - spacer - capacitySpacer, r);

                context.fillStyle = defaultColor;
                context.fillRect(x + xSpacer + w / 2 - 2, y + h, 4, 8);
                context.strokeRect(x + xSpacer + w / 2 - 2, y + h, 4, 8);
            }
            prevY = y + h + 8;
            context.fillRect(x - spacer, prevY, w * 8, 4);
            context.strokeRect(x - spacer, prevY, w * 8, 4);
            var relId = isSubsea || isDS10 ? 'SubseaAccumulator' : 'SurfaceAccumulator'; //may need to create a separate Id
            addRelLinePoint(relId + 'Left', x - spacer, prevY + 2);
            addRelLinePoint(relId + 'right', x - spacer + w * 8, prevY + 2);
            context.restore();

            var boxWidth = 125 * ratio;
            var boxHeight = 30 * ratio;
            var spacerBox = 10 * ratio;
            var boxX = x + spacerBox;
            var spacer2 = 10 * ratio;
            var spacer3 = 25 * ratio;
            var spacer4 = 5 * ratio;
            var spacer5 = 20 * ratio;
            var spacer6 = 105 * ratio;
            var boxY = y - spacer6;
            var startX = boxX + spacer4;

            // Data Readings
            if (isSubsea) {
                spacerBox = 155 * ratio;
                boxX = x - spacerBox;
                boxY = y - spacer5;
                startX = boxX + spacer4;

                var subseaReadbackPressure = getSnapshotKey('SubseaAccumulatorReadbackPressure');
                currentPressureObj = BopUtility.getSnapshot(data, subseaReadbackPressure, true);
                currentPressure = currentPressureObj && currentPressureObj.value !== -1 ? BopUtility.round5(currentPressureObj.value) : 'BAD DATA';
                pressureUom = currentPressureObj ? currentPressureObj.uom : '';

                var autoshearReadbackPressure = getSnapshotKey('AutoshearReadbackPressure');
                var asPressureObj = BopUtility.getSnapshot(data, autoshearReadbackPressure, true);
                var asPressure = asPressureObj && asPressureObj.value !== -1 ? BopUtility.round5(asPressureObj.value) : 'BAD DATA';
                var asPressureUom = asPressureObj ? asPressureObj.uom : '';

                labelSize = (14 * ratio) + 'px';
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                context.fillStyle = BopStack.WhiteColor;

                context.fillText(title, boxX - spacer2 / 2, boxY - spacer5);
                context.fillText('Readback Pressure', boxX - spacer4, boxY - spacer4);
                // Autoshear section
                var spacer7 = 75 * ratio;
                var asBoxY = boxY + spacer7;
                context.fillText('A/S Module Regulator', boxX - spacer2 / 2, asBoxY - spacer5);
                context.fillText('Readback Pressure', boxX - spacer4, asBoxY - spacer4);

                context.fillStyle = '#FFF';
                context.strokeRect(boxX, asBoxY, boxWidth, boxHeight);
                context.fillRect(boxX, asBoxY, boxWidth, boxHeight);
                labelSize = (22 * ratio) + 'px';
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                context.fillStyle = BopStack.BlackColor;
                context.fillText(asPressure + ' ' + asPressureUom, boxX + spacer2, asBoxY + spacer3);
                // End of autoshear
            } else if (isDS10) {
                spacerBox = 155 * ratio;
                boxX = x - spacerBox;
                boxY = y - spacer5;
                startX = boxX + spacer4;

                var subseaReadbackPressure = getSnapshotKey('SubseaAccumulatorReadbackPressure'); //Update for Conduit Pressure (PT-1)
                currentPressureObj = BopUtility.getSnapshot(data, subseaReadbackPressure, true);
                currentPressure = currentPressureObj && currentPressureObj.value !== -1 ? BopUtility.round5(currentPressureObj.value) : 'BAD DATA';
                pressureUom = currentPressureObj ? currentPressureObj.uom : '';

                var autoshearReadbackPressure = getSnapshotKey('AutoshearReadbackPressure'); //Update for Shear Ram pressure (PT-15)
                var asPressureObj = BopUtility.getSnapshot(data, autoshearReadbackPressure, true);
                var asPressure = asPressureObj && asPressureObj.value !== -1 ? BopUtility.round5(asPressureObj.value) : 'BAD DATA';
                var asPressureUom = asPressureObj ? asPressureObj.uom : '';

                labelSize = (14 * ratio) + 'px';
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                context.fillStyle = BopStack.WhiteColor;

                context.fillText(title, boxX - spacer2 / 2, boxY - spacer5);
                context.fillText('Pressure (PT-1)', boxX - spacer4, boxY - spacer4);
                // Autoshear section
                var spacer7 = 75 * ratio;
                var asBoxY = boxY + spacer7;
                context.fillText('Shear Ram', boxX - spacer2 / 2, asBoxY - spacer5);
                context.fillText('Pressure (PT-15)', boxX - spacer4, asBoxY - spacer4);

                context.fillStyle = '#FFF';
                context.strokeRect(boxX, asBoxY, boxWidth, boxHeight);
                context.fillRect(boxX, asBoxY, boxWidth, boxHeight);
                labelSize = (22 * ratio) + 'px';
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                context.fillStyle = BopStack.BlackColor;
                context.fillText(asPressure + ' ' + asPressureUom, boxX + spacer2, asBoxY + spacer3);
                // End of autoshear
            }
            context.fillStyle = '#FFF';
            context.strokeRect(boxX, boxY, boxWidth, boxHeight);
            context.fillRect(boxX, boxY, boxWidth, boxHeight);
            labelSize = (22 * ratio) + 'px';
            context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
            context.fillStyle = BopStack.BlackColor;
            context.fillText(currentPressure + ' ' + pressureUom, boxX + spacer2, boxY + spacer3);

            if (!isSubsea && !isDS10) {
                context.fillStyle = '#FFF';
                context.strokeStyle = '#d9d9d9';
                prevY = boxY + boxHeight;
                boxHeight = 50 * ratio;
                context.strokeRect(boxX, prevY, boxWidth, boxHeight);
                labelSize = (12 * ratio) + 'px';
                context.font = labelSize + ' ' + defaultFont[defaultFont.length - 1];
                prevY += spacer5;
                context.fillText('Minimum:  ' + minPressure, startX, prevY);
                prevY += spacer5;
                context.fillText('Maximum: ' + maxPressure, startX, prevY);
            }
            context.restore();
        }
    };

    return {
        setContext: function (value) {
            context = value;
            defaultFont = context.font.split(' ');
            relationshipLinesArr = [];
        },
        setRatio: function (value) {
            ratio = value;
        },
        setData: function (value) {
            data = value;
        },
        setConfigurationData: function (value) {
            configurationData = value;
        },
        drawHpuMotor: drawMotor,
        drawHbuMotor: drawHbuMotor,
        drawRelationshipLines: drawRelationshipLines,
        drawDS10RelationshipLines: drawDS10RelationshipLines,
        drawNEWRelationshipLines: drawNEWRelationshipLines,
        drawAccumulator: drawAccumulator,
        drawFlowMeter: drawFlowMeter,
        drawShearRequirements: drawShears,
        drawStaleIndicator: drawStaleIndicator,
        drawHpuReservoirTank: drawHpuReservoirTank,
        drawRigidConduit: drawRigidConduit,
        drawTitle: drawTitle,
        drawSeaLevel: drawSeaLevel
    };
});