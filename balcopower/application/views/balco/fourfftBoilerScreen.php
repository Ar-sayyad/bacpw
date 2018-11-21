<?php include('includes/header-top.php');?>
<style>
    iframe{
        min-height: 750px;
        height: auto;
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
                    <div class="col-lg-12">
                        <div class="card">
<!--                            <div class="card-title center">
                                <h4>PI CORESIGHT</h4>
                            </div>-->
                            <div class="card-body">

                              
                               <div id="mydiv">
                                   <img src="<?php echo base_url();?>piadmin/images/screens/Boiler.bmp" width="100%">
                                </div>
 <!--<button id="button">Load</button>-->
 

                               
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               
                
                <!-- End PAge Content -->
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
 <script>
 $(document).ready(function(){
$("#button").click(function () { 
    $url= "http://59.144.10.120/Coresight/PB/#/PBDisplays/396";
    alert($url);
   
    $("#frame").attr("src", $url);
});
});
</script>
<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("plantloadfactor", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "PLF in (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D": 10,
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
var chart = AmCharts.makeChart("x", {
    
	"type": "pie",
  "theme": "none",
  "dataProvider": [ {
    "country": "Lithuania",
    "value": 260
  }, {
    "country": "Ireland",
    "value": 201
  }, {
    "country": "Germany",
    "value": 65
  }, {
    "country": "Australia",
    "value": 39
  }, {
    "country": "UK",
    "value": 19
  }, {
    "country": "Latvia",
    "value": 10
  } ],
  "balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 9
            },
           
            "legend": {
              "useGraphSettings": false,
              "position": "bottom",
              "bulletType": "round",
              "equalWidths": false,
              "valueWidth": 30,
              //"color": "#FFFFFF"
            },
             
            
  "valueField": "value",
  "titleField": "country",
  "outlineAlpha": 0.4,
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:9px'><b>[[value]]</b> ([[percents]]%)</span>",
  "angle": 30,
  "export": {
    "enabled": true
  }
});
var chart = AmCharts.makeChart("plantAvailabilityfactor", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "PAF in (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
    "depth3D": 10,
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
            "valueBalloonsEnabled":true,
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

var chart = AmCharts.makeChart("trips", {
	"type": "serial",
        "theme": "none",
	"categoryField": "mw",
	//"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 20
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Trips:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Trips",
			"type": "column",
                        "color":"skyblue",
			"valueField": "Trips"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "No of Trips"
		}
	],
        "plotAreaFillAlphas": 0.1,
    "depth3D": 5,
    "angle": 20,
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
            "valueBalloonsEnabled":true,
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
			"Trips": 1.0
		},
		{
			"mw": 'CPP 600MW',
			"Trips": 1.0
		},
		{
			"mw": 'IPP 600MW',
			"Trips": 1.0
		},
//		{
//			"mw": 'CPP 1140 MW',
//			"Trips": 1.0
//		},
//		{
//			"mw": 'TPP 1200 MW',
//			"Trips": 1.0
//		},
//                {
//			"mw": 'TPP 1740 MW',
//			"Trips": 1.0
//		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("tubeleaks", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 20
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Tube:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Tube Leaks",
			"type": "column",
                        "color":"skyblue",
			"valueField": "Tube Leaks"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "No of Tube Leaks"
		}
	],
        "plotAreaFillAlphas": 0.1,
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
            "valueBalloonsEnabled":true,
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
			"Tube Leaks": 1.0
		},
		{
			"mw": 'CPP 600MW',
			"Tube Leaks": 1.0
		},
		{
			"mw": 'IPP 600MW',
			"Tube Leaks": 1.0
		},
//		{
//			"mw": 'CPP 1140',
//			"Trips": 1.0
//		},
//		{
//			"mw": 'TPP 1200',
//			"Trips": 1.0
//		},
//                {
//			"mw": 'TPP 1740',
//			"Trips": 1.0
//		}
                
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
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

var chart = AmCharts.makeChart("netgeneration", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "Net Geenration in MU"
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
			"bp": 11.79,
			"act": 11.08
		},
		{
			"mw": 'CPP 600MW',
			"bp": 13.10,
			"act": 12.31
		},
		{
			"mw": 'IPP 600MW',
			"bp": 13.10,
			"act": 12.31
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 24.90,
			"act": 23.39
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 26.21,
			"act": 24.62
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 38.00,
			"act": 35.70
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("auxconsumption", {
	"type": "serial",
        "theme": "black",
	"categoryField": "mw",
	//"rotate": true,
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 1,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "Aux Consumption in (%)"
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
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'CPP 600MW',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'IPP 600MW',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 9.0,
			"act": 10.0
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 9.0,
			"act": 10.0
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("grossheatrate", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 1,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "Heatrate in kcal/kwh"
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
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'CPP 600MW',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'IPP 600MW',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 2300,
			"act": 2500
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 2300,
			"act": 2500
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("gascalorificValue", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 1,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "GCV in kcal/kg"
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
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'CPP 600MW',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'IPP 600MW',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 3300,
			"act": 3300
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 3300,
			"act": 3300
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("scc360", {
	"type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
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
			"valueField": "bp"
		},
		{
			"balloonText": "ACT:[[value]]",
			"fillAlphas": 1,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			"title": "ACT",
			"type": "column",
                        "color":"orange",
			"valueField": "act"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "title": "SCC in gm/kwh"
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
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'CPP 600MW',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'IPP 600MW',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'CPP 1140MW',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'TPP 1200MW',
			"bp": 700,
			"act": 705
		},
                {
			"mw": 'TPP 1740MW',
			"bp": 700,
			"act": 705
		}
                
	],
    "export": {
    	"enabled": true
     }

});
</script>

<!-- Chart code -->

</body>
</html>