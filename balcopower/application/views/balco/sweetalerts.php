<?php include('includes/header-top.php');?>
<style>
    .card{
            padding: 50px;
    }
    </style>
<body class="fix-header fix-sidebar">
   <?php include('includes/preloader.php');?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <?php include('includes/header.php');?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
           <?php include('includes/sidebar.php');?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
           <?php include('includes/titlebar.php');?>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-info btn sweet-message">Sweet Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Text</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm Or Cancel</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Image Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-info btn sweet-image-message">Sweet Image Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet HTML</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Auto Close</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-danger btn sweet-auto">Sweet Auto Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Prompt</h4>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Ajax</h4>
                                <div class="card-content">
                                </div>
                                <div class="sweetalert m-t-15">
                                    <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->

            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
              <?php include('includes/footer.php');?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <?php include('includes/footer-min.php');?>
     <!-- Styles -->

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("monthlyCoalReceipt", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 90,
                "fontSize":12,
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 14
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 14
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "minimum": 40,
                        "maximum": 140,
                        "titleFontSize":14,
                        "fontSize":11,                        
                        "title": "Monthly Coal Receipt (MT)"
		}
	],
        "plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 30,
	"allLabels": [],
	"balloon": {
            "drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
            "legend": {
              "useGraphSettings": true,
              "position": "bottom",
              "bulletType": "round",
              "equalWidths": false,
              "valueWidth": 50,
              //"color": "#FFFFFF"
            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'CPP 540MW',
			"bp": 100.0,
			"act": 95.0
		},
		{
			"mw": 'CPP 600MW',
			"bp": 100.0,
			"act": 82.8
		},
		{
			"mw": 'IPP 600MW',
			"bp": 100.0,
			"act": 93.9
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 100.0,
			"act": 75.1
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 100.0,
			"act": 65
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 100.0,
			"act": 85
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart1 = AmCharts.makeChart("overallPlantGeneration", {
	  "theme": "none",
  "type": "gauge",
  //"rotate":true,
  "startDuration": 1,
   "axes": [{
    "topTextFontSize": 18,
    "fontSize":18,
    "color":"#FFEB3B",
    "topTextYOffset": 70,
    "axisColor": "#31d6ea",
    //"axisThickness": 0,
    "startValue": 0,
    "endValue": 2000,
    "gridInside": true,
   //"inside": true,
    "radius": "60%",
    "valueInterval": 500,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    //"unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
                "color": "#03A9F4",
                "endValue": 2000,
                "balloonText":"2000MW",
                "innerRadius": "105%",
                "radius": "170%",
               "gradientRatio": [0.4, 0, -0.4],
                "startValue": 0
              }, {
                "color": "#de4c4f",
                "endValue": 1305,
                "balloonText":"1305MW",
                "innerRadius": "105%",
                "radius": "170%",
               "gradientRatio": [0.4, 0, -0.4],
                "startValue": 0
              }
              , {
                "color": "#8BC34A",
                "endValue": 1740,
                "balloonText":"1740MW",
                "innerRadius": "105%",
                "radius": "170%",
               "gradientRatio": [0.4, 0, -0.4],
                "startValue": 1305
              }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
            },   
              
  "arrows": [{
    "alpha": 1,
    "innerRadius": "15%",
    "nailRadius": 0,
     "color": "#ffc107",
    "radius": "170%"
  }
  ]
});

setInterval('randomValue(1740)',500);
// set random value
function randomValue(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart1.arrows[0].setValue(value);
  chart1.axes[0].setTopText(value + " MW");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart1.axes[0].bands[2].setEndValue(value);
  
}

var chart = AmCharts.makeChart("monthlyDeliveredCost", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 90,
                "fontSize":12
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                        "fixedColumnWidth": 14
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                        "fixedColumnWidth": 14
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "minimum": 0,
                        "titleFontSize":14,
                        "fontSize":11,
                        "title": "Monthly Delivered Cost(Rs/MT)"
		}
	],
        
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 30,
	"allLabels": [],
	"balloon": {
            "drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
            "legend": {
              "useGraphSettings": true,
              "position": "bottom",
              "bulletType": "round",
              "equalWidths": false,
              "valueWidth": 50,
              //"color": "#FFFFFF"
            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'CPP 540MW',
			"bp": 12.96,
			"act": 12.31
		},
		{
			"mw": 'CPP 600MW',
			"bp": 14.40,
			"act": 13.68
		},
		{
			"mw": 'IPP 600MW',
			"bp": 14.40,
			"act": 13.68
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 27.36,
			"act": 25.99
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 28.80,
			"act": 27.36
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 41.76,
			"act": 39.67
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("grossgeneration", {
	"type": "serial",
        "theme": "none",
	"categoryField": "mw",
	//"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 90,
                 "fontSize":12
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 14
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 14
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "titleFontSize":14,
                        "fontSize":11,     
                        "title": "Gross Geenration in MU"
		}
	],
        
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            "drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
            "legend": {
              "useGraphSettings": true,
              "position": "bottom",
              "bulletType": "round",
              "equalWidths": false,
              "valueWidth": 50,
              //"color": "#FFFFFF"
            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'CPP 540MW',
			"bp": 12.96,
			"act": 12.31
		},
		{
			"mw": 'CPP 600MW',
			"bp": 14.40,
			"act": 13.68
		},
		{
			"mw": 'IPP 600MW',
			"bp": 14.40,
			"act": 13.68
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 27.36,
			"act": 25.99
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 28.80,
			"act": 27.36
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 41.76,
			"act": 39.67
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp1MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		//"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,            
                        "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp1YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly1", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp2MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp2YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly2", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp3MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp3YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly3", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp4MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp4YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly4", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp5MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp5YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly5", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});


var chart = AmCharts.makeChart("actVsBp6MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp6YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly6", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp7MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp7YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly7", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});


var chart = AmCharts.makeChart("actVsBp8MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp8YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly8", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp9MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp9YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly9", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp10MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp10YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly10", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("actVsBp11MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp11YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly11", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});


var chart = AmCharts.makeChart("actVsBp12MTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("actVsBp12YTD", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "BP",
			"type": "column",
                        "color":"skyblue",
			"valueField": "bp",
                         "fixedColumnWidth": 10
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act",
                         "fixedColumnWidth": 10
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "minimum": 0,
//                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 10,
	"allLabels": [],
	"balloon": {
            //"drop":true,
            "cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false

          },  
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": '',
			"bp": 11.79,
			"act": 11.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("monthly12", {
    "theme": "light",
    "type": "serial",
	"startDuration": 1,
    "dataProvider": [{
        "month": "Jan",
        "value": 4025,
        "color": "#FF0F00"
    }, {
        "month": "Feb",
        "value": 1882,
        "color": "#FF6600"
    }, {
        "month": "Mar",
        "value": 1809,
        "color": "#FF9E01"
    }, {
        "month": "Apr",
        "value": 1322,
        "color": "#FCD202"
    }, {
        "month": "May",
        "value": 1122,
        "color": "#F8FF01"
    }, {
        "month": "Jun",
        "value": 1114,
        "color": "#B0DE09"
    }, {
        "month": "Jul",
        "value": 984,
        "color": "#04D215"
    }, {
        "month": "Aug",
        "value": 711,
        "color": "#0D8ECF"
    }, {
        "month": "Sep",
        "value": 665,
        "color": "#0D52D1"
    }, {
        "month": "Oct",
        "value": 580,
        "color": "#2A0CD0"
    }, {
        "month": "Nov",
        "value": 443,
        "color": "#8A0CCF"
    }, {
        "month": "Dec",
        "value": 441,
        "color": "#CD0D74"
    }],
    "valueAxes": [{
        "position": "bottom",
       // "title": "Achivement"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "value",
         "fixedColumnWidth": 10
    }],
    "depth3D": 2,
	"angle": 10,
        "balloon": {
            //"drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },   
            "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0.05,
            "valueLineAlpha": 0.2,
            "fullWidth":true,
            "valueBalloonsEnabled":false,
            "categoryBalloonEnabled":false,
             "zoomable": true

          },
    "categoryField": "month",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "export": {
    	"enabled": true
     }

});

</script>

<!-- Chart code -->

</body>
</html>