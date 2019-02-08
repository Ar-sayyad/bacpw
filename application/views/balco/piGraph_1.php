<?php include('includes/header-top.php');?>
<style>
#plantloadfactor,#plantAvailabilityfactor,#trips,#tubeleaks,#grossgeneration,#netgeneration,#auxconsumption,#grossheatrate,#gascalorificValue,#scc360 {
  width: 100%;
  height: 600px;
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Plant Load Factor (PLF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantloadfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Plant Availability Factor (PAF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantAvailabilityfactor"></div>
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
<script src="<?php echo base_url();?>piadmin/js/dataloader.min.js"></script>

<!-- Chart code -->
<script>
var chart2 = AmCharts.makeChart("plantloadfactor", {
  "type": "serial",
  "dataLoader": {
    "url": "<?php echo base_url();?>piGraph/getPlotData"
  },
  "valueAxes": [{
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  }],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [{
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "value",
     "colorField": "color",
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "Name",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  }
});

setInterval("setDataSet1('<?php echo base_url();?>piGraph/getPlotData')",10000);  

function setDataSet1(dataset_url) {
  AmCharts.loadFile(dataset_url, {}, function(data) {
    chart2.dataProvider = AmCharts.parseJSON(data);
    chart2.validateData();
  });
}
</script>

<!-- Chart code -->

</body>
</html>