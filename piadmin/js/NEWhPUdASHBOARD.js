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

            x = 150;
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