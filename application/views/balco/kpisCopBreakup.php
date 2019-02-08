<?php include('includes/header-top.php');?>
<style>
#plantloadfactor,#plantAvailabilityfactor,#trips,#tubeleaks,#grossgeneration,#netgeneration,#auxconsumption,#grossheatrate,#gascalorificValue,#scc360 {
  width: 100%;
  height: 350px;
}
.center{
    text-align: center;
    margin-top: 5px;
    margin-bottom: 0px !important;
}
.center h4{
    font-weight: 600;
    color:#2e3192;
    font-size: 14px;
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
                                <h4>Plant Load Factor (PLF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantloadfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Plant Availability Factor (PAF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantAvailabilityfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Trips</h4>
                            </div>
                            <div class="card-body">
                                <div id="trips"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Tube Leaks</h4>
                            </div>
                            <div class="card-body">
                                <div id="tubeleaks"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Gross Generation</h4>
                            </div>
                            <div class="card-body">
                                <div id="grossgeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Net Generation</h4>
                            </div>
                            <div class="card-body">
                                <div id="netgeneration"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Aux Consumption in (%)</h4>
                            </div>
                            <div class="card-body">
                                <div id="auxconsumption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Gross Heat Rate</h4>
                            </div>
                            <div class="card-body">
                                <div id="grossheatrate"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Gas Calorific Value(GCV)</h4>
                            </div>
                            <div class="card-body">
                                <div id="gascalorificValue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>SCC @3600</h4>
                            </div>
                            <div class="card-body">
                                <div id="scc360"></div>
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
                "labelRotation": 90,
                 "fontSize": 11
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
//                         "minimum": 40,
//                        "maximum": 120,
                        "titleFontSize":14,
                        "fontSize":11, 
                        "title": "PLF in (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
        "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 100.0,
			"act": 95.0
		},
		{
			"mw": 'CPP 600',
			"bp": 100.0,
			"act": 82.8
		},
		{
			"mw": 'IPP 600',
			"bp": 100.0,
			"act": 93.9
		},
		{
			"mw": 'CPP 1140',
			"bp": 100.0,
			"act": 75.1
		},
		{
			"mw": 'TPP 1200',
			"bp": 100.0,
			"act": 65
		},
                {
			"mw": 'TPP 1740',
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
               "labelRotation": 90,
                 "fontSize": 11
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
                        "title": "PAF in (%)"
		}
	],
        "plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 100.0,
			"act": 95.0
		},
		{
			"mw": 'CPP 600',
			"bp": 100.0,
			"act": 82.8
		},
		{
			"mw": 'IPP 600',
			"bp": 100.0,
			"act": 93.9
		},
		{
			"mw": 'CPP 1140',
			"bp": 100.0,
			"act": 75.1
		},
		{
			"mw": 'TPP 1200',
			"bp": 100.0,
			"act": 65
		},
                {
			"mw": 'TPP 1740',
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
                "labelRotation": 90,
                "fontSize":11
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
			"valueField": "Trips",
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
                        "title": "No of Trips"
		}
	],
        "plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"Trips": 1.0
		},
		{
			"mw": 'CPP 600',
			"Trips": 1.0
		},
		{
			"mw": 'IPP 600',
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
                "labelRotation": 90,
                "fontSize": 11
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
			"valueField": "Tube Leaks",
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
                        "fontSize": 11,
                        "title": "No of Tube Leaks"
		}
	],
        "plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"Tube Leaks": 1.0
		},
		{
			"mw": 'CPP 600',
			"Tube Leaks": 1.0
		},
		{
			"mw": 'IPP 600',
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
                "labelRotation": 90,
                "fontSize": 11,
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
                        "fontSize": 11,
                        "title": "Gross Geenration in MU"
		}
	],
        
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 12.96,
			"act": 12.31
		},
		{
			"mw": 'CPP 600',
			"bp": 14.40,
			"act": 13.68
		},
		{
			"mw": 'IPP 600',
			"bp": 14.40,
			"act": 13.68
		},
		{
			"mw": 'CPP 1140',
			"bp": 27.36,
			"act": 25.99
		},
		{
			"mw": 'TPP 1200',
			"bp": 28.80,
			"act": 27.36
		},
                {
			"mw": 'TPP 1740',
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
                "labelRotation": 90,
                "fontSize": 11
	},
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "BP<br> [[value]] ",
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
			"balloonText": "ACT<br> [[value]] ",
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
                        "fontSize": 11,
                        "title": "Net Geenration in MU"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 11.79,
			"act": 11.08
		},
		{
			"mw": 'CPP 600',
			"bp": 13.10,
			"act": 12.31
		},
		{
			"mw": 'IPP 600',
			"bp": 13.10,
			"act": 12.31
		},
		{
			"mw": 'CPP 1140',
			"bp": 24.90,
			"act": 23.39
		},
		{
			"mw": 'TPP 1200',
			"bp": 26.21,
			"act": 24.62
		},
                {
			"mw": 'TPP 1740',
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
        "theme": "light",
	"categoryField": "mw",
	//"rotate": true,
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left",
                "labelRotation": 90,
                "fontSize": 11
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
			"fillAlphas": 1,
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
                        "fontSize": 11,
                        "title": "Aux Consumption in (%)"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'CPP 600',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'IPP 600',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'CPP 1140',
			"bp": 9.0,
			"act": 10.0
		},
		{
			"mw": 'TPP 1200',
			"bp": 9.0,
			"act": 10.0
		},
                {
			"mw": 'TPP 1740',
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
                "labelRotation": 90,
                "fontSize": 11
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
			"fillAlphas": 1,
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
                        "fontSize": 11,
                        "title": "Heatrate in kcal/kwh"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'CPP 600',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'IPP 600',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'CPP 1140',
			"bp": 2300,
			"act": 2500
		},
		{
			"mw": 'TPP 1200',
			"bp": 2300,
			"act": 2500
		},
                {
			"mw": 'TPP 1740',
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
                "labelRotation": 90,
                "fontSize": 11,
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
			"fillAlphas": 1,
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
                        "fontSize": 11,
                        "title": "GCV in kcal/kg"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'CPP 600',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'IPP 600',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'CPP 1140',
			"bp": 3300,
			"act": 3300
		},
		{
			"mw": 'TPP 1200',
			"bp": 3300,
			"act": 3300
		},
                {
			"mw": 'TPP 1740',
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
                "labelRotation": 90,
                "fontSize": 11
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
			"fillAlphas": 1,
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
                        "fontSize": 11,
                        "title": "SCC in gm/kwh"
		}
	],
        //"plotAreaFillAlphas": 0.1,
    "depth3D": 0,
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
			"mw": 'CPP 540',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'CPP 600',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'IPP 600',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'CPP 1140',
			"bp": 700,
			"act": 705
		},
		{
			"mw": 'TPP 1200',
			"bp": 700,
			"act": 705
		},
                {
			"mw": 'TPP 1740',
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