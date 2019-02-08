<?php include('includes/header-top.php');?>
<style>
#monthlyCoalReceipt,#monthlyDeliveredCost,#plantAvailabilityfactor,#trips,#actVsBp1,#grossgeneration,#netgeneration,#auxconsumption,#grossheatrate,#gascalorificValue,#scc360 {
  width: 100%;
  height: 400px;
}
#actVsBp1MTD,#actVsBp1YTD,#actVsBp2MTD,#actVsBp2YTD,#actVsBp3MTD,#actVsBp3YTD,#actVsBp4MTD,#actVsBp4YTD,#actVsBp5MTD,#actVsBp5YTD,#actVsBp6MTD,#actVsBp6YTD
,#actVsBp7MTD,#actVsBp7YTD,#actVsBp8MTD,#actVsBp8YTD,#actVsBp9MTD,#actVsBp9YTD,#actVsBp10MTD,#actVsBp10YTD,#actVsBp11MTD,#actVsBp11YTD,#actVsBp12MTD,#actVsBp12YTD{
 width: 100%;
  height: 100px;   
}
#monthly1,#monthly2,#monthly3,#monthly4,#monthly5,#monthly6,#monthly7,#monthly8,#monthly9,#monthly10,#monthly11,#monthly12{
 width: 100%;
  height: 100px;   
}
.center{
    text-align: center;
    margin-top: 5px;
    margin-bottom: 0px !important;
}
.center h4{
    font-weight: 600;
    color:#2e3192;
    font-size: 16px;
}
.col-lg-2, .col-md-3,.col-lg-3, .col-lg-4,.col-lg-6, .col-lg-8,.col-12{
    padding-right: 3px !important;
    padding-left: 3px !important;
}
.mydata{
    padding: 20px 25px 20px 25px;
}

/*.page-wrapper{
    /*background-image: url("<?php echo base_url();?>piadmin/images/bg/balco.jpg");
    height: 100%; 
    /*background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}*/
.m-b-0 {
    margin-bottom: 0px!important;
    font-size: 16px;
    font-weight:500;
    font-family: 'verdana', sans-serif;
    /*text-transform:capitalize;*/
}
.bg-brown {
    background: #b43dc8 !important;
    color: #ffffff;
    fill: #b43dc8;
}
.bg-bluevila {
    background: #1174a3 !important;
    color: #ffffff;
    fill: #1174a3;
}
.table > thead > tr > th {
    border: 1px solid #e7e7e7;
    font-weight: 600;
    text-align: center;
    color: #ffffff;
    line-height: 24px;
    font-size: 18px;
    background: #356add !important;
}
.table > tbody > tr > td {
   vertical-align:middle;
       font-weight: 501;
}
marquee{
color:#b83c8e;
font-size:20px;
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
<!--                   <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-default p-20" style="background: var(--light);">
                            <div class="card-body">
                                <div class="card-content">
                                    <marquee>A scrolling text created with HTML Marquee element.</marquee>
                                </div>
                            </div>
                        </div>
                         /# card 
                    </div>
                       
                        <div class="col-lg-6">
                        <div class="card bg-default p-20"  style="background: var(--light);">
                            <div class="card-body">
                                <div class="card-content">
                                    <marquee>A scrolling text created with HTML Marquee element.</marquee>
                                </div>
                            </div>
                        </div>
                         /# card 
                    </div>
                     /# column 
                </div>-->
                
                 <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                                    <p class="m-b-0">Coal Cost (Rs/kWh)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-bluevila p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> XX,XXX</h2>
                                    <p class="m-b-0">Coal Cost (Rs/kWh)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> XX,XXX</h2>
                                    <p class="m-b-0">Import Grid Cost (Rs/kWh)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XX,XXX</h2>
                                    <p class="m-b-0">Total Cost (Rs/kWh)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-info p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-server f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="ti-server"></i> XXX</h2>
                                    <p class="m-b-0">Coal Stock (MT)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                                    <p class="m-b-0">Power Smelter Cost (Rs/Ton)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark  p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                                    <p class="m-b-0">Electricity Duty (Rs/kWh)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-brown p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-inr f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                                    <p class="m-b-0">EBIDTA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    
                    <div class="col-lg-8">                         
                        <div class="card" style="padding: 10px;min-height: 650px;">
                            <div class="table-responsive">
                                    <table id="example23" class="  table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    SR.
                                                </th>
                                                <th>
                                                    KPI
                                                </th>
                                                <th>
                                                    Actual (MTD)
                                                </th>
                                                <th style="width:20%">
                                                    ACT Vs BP<br>(MTD)
                                                </th>
                                                <th style="width:40%;text-align: center;">
                                                    Monthly Achievements
                                                </th>
                                                <th>
                                                    Actual (YTD)
                                                </th>
                                                <th style="width:20%">
                                                    ACT Vs BP<br>(YTD)
                                                </th>
                                               
                                          </tr>
                                        </thead>
                                            <tr>
                                                <td>1</td>
                                                <td>Plant Load Factor (%)</td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp1MTD"></div></td>
                                                <td><div id="monthly1"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp1YTD"></div></td>
                                                                                           
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>Plant Availability Factor (%)</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp2MTD"></div></td>
                                                <td><div id="monthly2"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp2YTD"></div></td>
                                                                                           
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Gross Generation</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp3MTD"></div></td>
                                                <td><div id="monthly3"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp3YTD"></div></td>
                                                                                      
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Aux Consumption</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp4MTD"></div></td>
                                                <td><div id="monthly4"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp4YTD"></div></td>
                                                                                 
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Net Generation</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp5MTD"></div></td>
                                                <td><div id="monthly5"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp5YTD"></div></td>                                                                                   
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>SCC @360</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp6MTD"></div></td>
                                                <td><div id="monthly6"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp6YTD"></div></td>                                                                                    
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Heat Rate</td>
                                                 <td>100.0</td>
                                               <td><div id="actVsBp7MTD"></div></td>
                                                <td><div id="monthly7"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp7YTD"></div></td>                                                                                   
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>SOC</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp8MTD"></div></td>
                                                <td><div id="monthly8"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp8YTD"></div></td>                                                                                    
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Oil Consumption</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp9MTD"></div></td>
                                                <td><div id="monthly9"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp9YTD"></div></td>                                                                                   
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>GCV</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp10MTD"></div></td>
                                                <td><div id="monthly10"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp10YTD"></div></td>                                                                                  
                                            </tr>
<!--                                             <tr>
                                                <td>11</td>
                                                <td>Tripping</td>
                                                 <td><div id="actVsBp11MTD"></div></td>
                                                <td><div id="monthly11"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp11YTD"></div></td>                                                                                      
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Tube Leakage</td>
                                                 <td><div id="actVsBp12MTD"></div></td>
                                                <td><div id="monthly12"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp12YTD"></div></td>
                                                                                    
                                            </tr>-->
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Monthly Coal Receipt(MT)</h4>
                            </div>
                            <div class="card-body">
                                <div id="monthlyCoalReceipt"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-title center">
                                <h4>Monthly Delivered Cost(Rs/MT)</h4>
                            </div>
                            <div class="card-body">
                                <div id="monthlyDeliveredCost"></div>
                            </div>
                        </div>
                    <div class="card">
                            <div class="card-title center">
                                <h4>Gross Generation in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="grossgeneration"></div>
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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
    "depth3D": 0,
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