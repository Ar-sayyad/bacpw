<?php include('includes/header-top.php');?>
<style>
#unitloadfactor,#unitAvailabilityfactor,#boilereffio,#boilereffhl,#grossgeneration,#netgeneration,#auxconsumption,#coalconsumption,#heatrate,#scc,#unitoverall,#turbine {
  width: 100%;
  height: 300px;
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
                                <h4>Unit Load Factor (ULF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="unitloadfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Unit Availability Factor (UAF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="unitAvailabilityfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Gross Generation in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="grossgeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Net Generation in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="netgeneration"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-2">
                       <div class="card">
                            <div class="card-title center">
                                <h4>Aux Consumption in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="auxconsumption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Boiler EFF(IO Method)</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilereffio"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Boiler EFF(HL Method)</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilereffhl"></div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Heatrate in kcal/kWh</h4>
                            </div>
                            <div class="card-body">
                                <div id="heatrate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>SCC in gm/kWh</h4>
                            </div>
                            <div class="card-body">
                                <div id="scc"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Coal Consumption in MT</h4>
                            </div>
                            <div class="card-body">
                                <div id="coalconsumption"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Unit Overall EFF</h4>
                            </div>
                            <div class="card-body">
                                <div id="unitoverall"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Turbine Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="turbine"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card mydata">
                            <div class="card-body">
<!--                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>-->
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

<!-- Chart code -->
<script>

var chart = AmCharts.makeChart("unitloadfactor", {
	"type": "pie",
  "theme": "none",
  "titles": [ 
//      {
//    //"text": "Visitors countries",
//    //"size": 16
//  } 
  ],
  "dataProvider": [ {
    "unit": "Unit #1",
    "val": 130
  }, {
    "unit": "Unit #2",
    "val": 128
  }, {
    "unit": "Unit #3",
    "val": 135
  }, {
    "unit": "Unit #4",
    "val": 140
  }
  ],
  "balloon": {
            "drop":true,
            //"cornerRadius": 5,
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
              //"color": "#FFFFFF"
            },
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  //"startEffect": "elastic",
  "startDuration": 1,
  //"labelRadius": 10,
  //"innerRadius": "50%",
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b></span>",
  "angle": 30,
  "export": {
    "enabled": true
  }
} );

var chart = AmCharts.makeChart("unitAvailabilityfactor", {
	"type": "pie",
  "theme": "light",
  "titles": [ 
//      {
//    //"text": "Visitors countries",
//    //"size": 16
//  } 
  ],
  "dataProvider": [ {
    "unit": "UAF",
    "val": 99
  }, {
    "unit": "Other",
    "val": 1
  }
  ],
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
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  //"startEffect": "elastic",
  "startDuration": 1,
  "labelRadius": 10,
  "innerRadius": "50%",
  "depth3D": 2,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>",
  "angle": 5,
  "export": {
    "enabled": true
  }
} );

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
			"balloonText": "Gross:<br>[[value]]",
                        "colorField": "color",
			"fillAlphas": 0.85,
			"id": "AmGraph-1",
			"lineAlpha": 0.1,
			"title": "Gross Generation in MU",
			"type": "column",
                        "color":"skyblue",
			"valueField": "value"
		}
	],
	"guides": [],
	"valueAxes": [
		{
                    //"maximum": 4,
                    "minimum": 2.5,
                    "axisAlpha": 1,
                    "dashLength": 4,
                    "position": "left",
			"id": "ValueAxis-1",
			"position": "bottom",			
                        "title": "Gross Generation in MU"
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
//            "legend": {
//              "useGraphSettings": true,
//              //"position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'BP',
                       "color": "#0D52D1",
			"value": 3.24
		},
                {
			"mw": 'ACT',
                        "color": "#de4c4f",
			"value": 3.08
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("netgeneration", {
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
			"balloonText": "Net:<br>[[value]]",
                        "colorField": "color",
			"fillAlphas": 0.85,
			"id": "AmGraph-1",
			"lineAlpha": 0.1,
			"title": "Net Generation in MU",
			"type": "column",
                        "color":"skyblue",
			"valueField": "value"
		}
	],
	"guides": [],
	"valueAxes": [
		{
                    //"maximum": 5,
                    "minimum": 0,
                    "axisAlpha": 1,
                    "dashLength": 4,
                    "position": "left",
			"id": "ValueAxis-1",
			"position": "bottom",			
                        "title": "Net Generation in MU"
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
//            "legend": {
//              "useGraphSettings": true,
//              //"position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'BP',
                       "color": "#0D52D1",
			"value": 2.95
		},
                {
			"mw": 'ACT',
                        "color": "#de4c4f",
			"value": 2.80
		}
                
	],
    "export": {
    	"enabled": true
     }

});


var chart = AmCharts.makeChart("boilereffio", {
	"type": "pie",
  "theme": "light",
  "titles": [ 
//      {
//    //"text": "Visitors countries",
//    //"size": 16
//  } 
  ],
  "dataProvider": [ {
    "unit": "IO",
    "val": 88.5
  }, {
    "unit": "Other",
    "val": 11.5
  }
  ],
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
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  //"startEffect": "elastic",
  "startDuration": 1,
  "labelRadius": 10,
  "innerRadius": "50%",
  "depth3D": 2,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>",
  "angle": 5,
  "export": {
    "enabled": true
  }
} );
var chart = AmCharts.makeChart("boilereffhl", {
	"type": "pie",
  "theme": "light",
  "titles": [ 
//      {
//    //"text": "Visitors countries",
//    //"size": 16
//  } 
  ],
  "dataProvider": [ {
    "unit": "HL",
    "val": 89
  }, {
    "unit": "Other",
    "val": 11
  }
  ],
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
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  //"startEffect": "elastic",
  "startDuration": 1,
  "labelRadius": 10,
  "innerRadius": "50%",
  "depth3D": 2,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>",
  "angle": 5,
  "export": {
    "enabled": true
  }
} );

var chart = AmCharts.makeChart("auxconsumption", {
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
			"balloonText": "Aux:<br>[[value]]",
                        "colorField": "color",
			"fillAlphas": 0.85,
			"id": "AmGraph-1",
			"lineAlpha": 0.1,
			"title": "Aux Generation in MU",
			"type": "column",
                        "color":"skyblue",
			"valueField": "value"
		}
	],
	"guides": [],
	"valueAxes": [
		{
                    //"maximum": 5,
                    "minimum": 0.10,
                    "axisAlpha": 1,
                    "dashLength": 4,
                    "position": "left",
			"id": "ValueAxis-1",
			"position": "bottom",			
                        "title": "Aux Generation in MU"
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
//            "legend": {
//              "useGraphSettings": true,
//              //"position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'BP',
                       "color": "#0D52D1",
			"value": 0.292
		},
                {
			"mw": 'ACT',
                        "color": "#de4c4f",
			"value": 0.277
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("heatrate", {
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
			"balloonText": "Heatrate:<br>[[value]]",
                        "colorField": "color",
			"fillAlphas": 0.85,
			"id": "AmGraph-1",
			"lineAlpha": 0.1,
			"title": "Heatrate in kcal/kWh",
			"type": "column",
                        "color":"skyblue",
			"valueField": "value"
		}
	],
	"guides": [],
	"valueAxes": [
		{
                    //"maximum": 4,
                   //"minimum": 1000,
                    "axisAlpha": 1,
                    "dashLength": 4,
                    "position": "left",
			"id": "ValueAxis-1",
			"position": "bottom",			
                        "title": "Heatrate in kcal/kWh"
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
//            "legend": {
//              "useGraphSettings": true,
//              //"position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'BP',
                       "color": "#0D52D1",
			"value": 2350
		},
                {
			"mw": 'ACT',
                        "color": "#de4c4f",
			"value": 2450
		}
                
	],
    "export": {
    	"enabled": true
     }

});

var chart = AmCharts.makeChart("unitoverall", {
	"type": "pie",
  "theme": "light",
  "titles": [ 
//      {
//    //"text": "Visitors countries",
//    //"size": 16
//  } 
  ],
  "dataProvider": [ {
    "unit": "Overall",
    "val": 35.1
  }, {
    "unit": "Other",
    "val": 64.9
  }
  ],
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
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  //"startEffect": "elastic",
  "startDuration": 1,
  "labelRadius": 10,
  "innerRadius": "50%",
  "depth3D": 2,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>",
  "angle": 5,
  "export": {
    "enabled": true
  }
} );
var chart = AmCharts.makeChart("turbine", {
	"type": "pie",
  "theme": "light",
  "titles": [ 
//      {
//    //"text": "Visitors countries",
//    //"size": 16
//  } 
  ],
  "dataProvider": [ {
    "unit": "Turbine",
    "val": 43
  }, {
    "unit": "Other",
    "val": 57
  }
  ],
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
  "valueField": "val",
  "titleField": "unit",
  "adjustBorderColor": false,
  //"startEffect": "elastic",
  "startDuration": 1,
  "labelRadius": 10,
  "innerRadius": "50%",
  "depth3D": 2,
  "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>",
  "angle": 5,
  "export": {
    "enabled": true
  }
} );


var chart = AmCharts.makeChart("scc", {
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
			"balloonText": "SCC:<br>[[value]]",
                        "colorField": "color",
			"fillAlphas": 0.85,
			"id": "AmGraph-1",
			"lineAlpha": 0.1,
			"title": "SCC in gm/kWh",
			"type": "column",
                        "color":"skyblue",
			"valueField": "value"
		}
	],
	"guides": [],
	"valueAxes": [
		{
                    //"maximum": 4,
                   //"minimum": 600,
                    "axisAlpha": 1,
                    "dashLength": 4,
                    "position": "left",
			"id": "ValueAxis-1",
			"position": "bottom",			
                        "title": "SCC in gm/kWh"
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
//            "legend": {
//              "useGraphSettings": true,
//              //"position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'BP',
                       "color": "#0D52D1",
			"value": 685
		},
                {
			"mw": 'ACT',
                        "color": "#de4c4f",
			"value": 700
		}
                
	],
    "export": {
    	"enabled": true
     }

});
var chart = AmCharts.makeChart("coalconsumption", {
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
			"balloonText": "SCC:<br>[[value]]",
                        "colorField": "color",
			"fillAlphas": 0.85,
			"id": "AmGraph-1",
			"lineAlpha": 0.1,
			"title": "SCC in gm/kWh",
			"type": "column",
                        "color":"skyblue",
			"valueField": "value"
		}
	],
	"guides": [],
	"valueAxes": [
		{
                    //"maximum": 4,
                   "minimum": 1000,
                    "axisAlpha": 1,
                    "dashLength": 4,
                    "position": "left",
			"id": "ValueAxis-1",
			"position": "bottom",			
                        "title": "SCC in gm/kWh"
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
//            "legend": {
//              "useGraphSettings": true,
//              //"position": "bottom",
//              "bulletType": "round",
//              "equalWidths": false,
//              "valueWidth": 50,
//              //"color": "#FFFFFF"
//            },
	"titles": [],
	"dataProvider": [
		{
			"mw": 'BP',
                       "color": "#0D52D1",
			"value": 2000
		},
                {
			"mw": 'ACT',
                        "color": "#de4c4f",
			"value": 2155
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