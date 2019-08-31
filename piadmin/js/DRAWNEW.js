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