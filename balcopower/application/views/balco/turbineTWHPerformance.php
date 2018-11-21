<?php include('includes/header-top.php');?>
<style>
#plantwiseFFTPerformance,#boilerOneEfficiency,#boilerTwoEfficiency,#boilerEfficiency,#boilerThreeEfficiency,#boilerFourEfficiency {
  width: 100%;
  height: 310px;
}
.center{
    text-align: center;
    margin-top: 5px;
    margin-bottom: 0px !important;
}
.center h4{
    font-weight: 600;
    color:#2e3192;
    font-size: 18px;
}
.col-lg-2, .col-lg-3, .col-lg-4, .col-12{
    padding-right: 3px !important;
    padding-left: 3px !important;
}
.mydata{
    padding: 20px 25px 20px 25px;
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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>1200 MW Unit wise Performance</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantwiseFFTPerformance"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerOneEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Condenser Effectiveness</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerTwoEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine HP Cylinder Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerEfficiency"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                       <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine IP Cylinder Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerThreeEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine LP Cylinder Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerFourEfficiency"></div>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
                
<!--                <div class="row">
                    <div class="col-12">
                        <div class="card mydata">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr style="background-color: #2177cd;">
                                                <th rowspan="2">Sr.</th>
                                                <th rowspan="2">KPI's - Plant Performance</th>
                                                <th rowspan="2">UOM</th>
                                                <th colspan="2">CPP 540 MW</th>
                                                <th colspan="2">CPP 600 MW</th>
                                                <th colspan="2">IPP 600 MW</th>
                                                <th colspan="2">CPP 1140 MW</th>
                                                <th colspan="2">TPP 1200 MW</th>
                                                <th colspan="2">TPP 1740 MW</th>
                                            </tr>
                                            <tr style="background-color: #2177cd;">
                                                 <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                               
                                          </tr>
                                        </thead>
                                            <tr>
                                                <td>1</td>
                                                <td>Plant Load Factor</td>
                                                <td>%</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>                                                
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>Plant Availability Factor</td>
                                                <td>%</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>                                                
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Gross Generation</td>
                                                <td>MU</td>
                                                <td>12.96</td>
                                                <td>12.31</td>
                                                <td>14.40</td>
                                                <td>13.68</td>
                                                <td>14.40</td>
                                                <td>13.68</td>
                                                <td>27.36</td>
                                                <td>25.99</td>
                                                <td>28.80</td>
                                                <td>27.36</td>
                                                <td>41.8</td>
                                                <td>39.7</td>                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Aux Consumption</td>
                                                <td>%</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>                                            
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Net Generation</td>
                                                <td>MU</td>
                                                <td>11.79</td>
                                                <td>11.8</td>
                                                <td>13.10</td>
                                                <td>12.31</td>
                                                <td>13.10</td>
                                                <td>12.31</td>
                                                <td>24.90</td>
                                                <td>23.39</td>
                                                <td>26.21</td>
                                                <td>24.62</td>
                                                <td>38.0</td>
                                                <td>35.7</td>                                            
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>SCC @360</td>
                                                <td>gms/kWh</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>                                           
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Heat Rate</td>
                                                <td>kcal/kWh</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>                                          
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>SOC</td>
                                                <td>ml/kWh</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Oil Consumption</td>
                                                <td>kl</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>GCV</td>
                                                <td>kcal/kg</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>                                       
                                            </tr>
                                             <tr>
                                                <td>11</td>
                                                <td>Tripping</td>
                                                <td>No's</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Tube Leakage</td>
                                                <td>No's</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                
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
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/lightnew.js"></script>
<!-- Chart code -->
<script>

var chart = AmCharts.makeChart("plantwiseFFTPerformance", {
	"type": "pie",
  "theme": "light",
  "addClassNames": true,
  "balloon": {
            "drop":true,
            "adjustBorderColor": false,
            "color": "#ffffff",
            "fixedPosition": true,
            "fontSize": 10
            },
           
            "legend": {
              "useGraphSettings": false,
              "position": "bottom",
              "bulletType": "round",
              "equalWidths": false,
              "valueWidth": 30,
            },
  "dataProvider": [ {
    "unit": "Unit#1",
    "val": 120
  }, {
    "unit": "Unit#2",
    "val": 130
  }, {
    "unit": "Unit#3",
    "val": 135
  }, {
    "unit": "Unit#4",
    "val": 128
  }
  ],
 
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  "labelsEnabled": false,
  "outlineColor": "",
  "startDuration": 0,
  "labelRadius": 5,
   pullOutRadius: 40,
  "depth3D": 0,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b></span>",
  "angle": 0,
  "export": {
    "enabled": true
  }
} );

var chart = AmCharts.makeChart("boilerOneEfficiency", {
  "type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0,
                "fontSize": 11,
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Efficiency:<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Efficiency",
			"type": "column",
                         //"fillColorsField": "#007bff",
			"valueField": "eff",
                         "fixedColumnWidth": 25
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "minimum":40,
                        "maximum":45,
                         "titleFontSize":14,
                         "fontSize": 11,
                        "title": "Efficiency (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D":0,
        "angle": 0,
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
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              "backgroundColor":"color"
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'Turbine#1',
			"eff": 44.5,
                        //"color":"#007bff"
		},
		{
			"mw": 'Turbine#2',
			"eff": 44.0,
                        //"color":"#007bff"
		},
		{
			"mw": 'Turbine#3',
			"eff": 43.5,
                       // "color":"#007bff"
		},
		{
			"mw": 'Turbine#4',
			"eff": 43.0,
                       // "color":"#007bff"
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("boilerTwoEfficiency", {
  "type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0,
                "fontSize": 11,
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Effect.:<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Effectiveness",
			"type": "column",
                         "fillColorsField": "color",
			"valueField": "eff",
                         "fixedColumnWidth": 25
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "minimum":40,
                         "titleFontSize":14,
                         "fontSize": 11,
                        "title": "Effectiveness (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D": 0,
        "angle": 0,
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
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              "backgroundColor":"color"
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'Turbine#1',
			"eff": 60,
                        "color":"#dc3545"
		},
		{
			"mw": 'Turbine#2',
			"eff": 55,
                        "color":"#dc3545"
		},
		{
			"mw": 'Turbine#3',
			"eff": 48,
                        "color":"#dc3545"
		},
		{
			"mw": 'Turbine#4',
			"eff": 52,
                        "color":"#dc3545"
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("boilerEfficiency", {
  "type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0,
                "fontSize": 11,
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Efficiency:<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Efficiency",
			"type": "column",                       
                         "fillColorsField": "color",
			"valueField": "eff",
                         "fixedColumnWidth": 25
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "titleFontSize":14,
                         "minimum":80,
                         "maximum":90,
                         "fontSize": 11,
                        "title": "Efficiency (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D":0,
        "angle": 0,
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
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              "backgroundColor":"color"
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'Turbine#1',
			"eff": 88,
                        "color":"#ffc107"
		},
		{
			"mw": 'Turbine#2',
			"eff": 85,
                        "color":"#ffc107"
		},
		{
			"mw": 'Turbine#3',
			"eff": 88,
                        "color":"#ffc107"
		},
		{
			"mw": 'Turbine#4',
			"eff": 85,
                        "color":"#ffc107"
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("boilerThreeEfficiency",{
  "type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0,
                "fontSize": 11,
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Efficiency:<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Efficiency",
			"type": "column",                       
                         "fillColorsField": "color",
			"valueField": "eff",
                         "fixedColumnWidth": 25
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                        "titleFontSize":14,
                        "minimum":80,
                        "fontSize": 11,
                        "title": "Efficiency (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D":0,
        "angle": 0,
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
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              "backgroundColor":"color"
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'Turbine#1',
			"eff": 90,
                        "color":"#6610f2"
		},
		{
			"mw": 'Turbine#2',
			"eff": 92,
                        "color":"#6610f2"
		},
		{
			"mw": 'Turbine#3',
			"eff": 90,
                        "color":"#6610f2"
		},
		{
			"mw": 'Turbine#4',
			"eff": 88,
                        "color":"#6610f2"
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("boilerFourEfficiency", {
  "type": "serial",
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
        "startEffect": "elastic",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 0,
                "fontSize": 11,
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Efficiency:<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Efficiency",
			"type": "column",                       
                         "fillColorsField": "color",
			"valueField": "eff",
                         "fixedColumnWidth": 25
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "bottom",
			"axisAlpha": 1,
                         "titleFontSize":13,
                          "minimum":70,
                         "fontSize": 11,
                        "title": "Efficiency (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D":0,
        "angle": 0,
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
//            "legend": {
//              "useGraphSettings": true,
//              "position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              "backgroundColor":"color"
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'Turbine#1',
			"eff": 75,
                        "color":"#0b1551"
		},
		{
			"mw": 'Turbine#2',
			"eff": 78,
                        "color":"#0b1551"
		},
		{
			"mw": 'Turbine#3',
			"eff": 80,
                        "color":"#0b1551"
		},
		{
			"mw": 'Turbine#4',
			"eff": 72,
                        "color":"#0b1551"
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