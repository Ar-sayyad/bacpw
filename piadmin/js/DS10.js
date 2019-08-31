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