
@extends('layouts.app')
@section('content2')
<script>
var element = document.getElementById("home");
element.classList.add("show");
</script>
<style>
.card-red-shade1{
  color:white;
  background-color:#d35454;


}
.card-red-shade2{
  color:white;
  background-color:#d96d6d;


}
.card-red-shade3{
  color:white;
  background-color:#e08585;


}
.card-red-shade4{
  color:white;
  background-color:#e69d9d;



}




</style>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper" style="margin-left: auto;width: 118%;">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome User</h3>
                  <h6 class="font-weight-normal mb-0">Dashboard</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  </ol>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade1">
                    <div class="card-body">
                      <p class="mb-4">Number of Students</p>
                      <p class="fs-30 mb-2">4006</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade2">
                    <div class="card-body">
                      <p class="mb-4">Number of projects</p>
                      <p class="fs-30 mb-2">61344</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade3">
                    <div class="card-body">
                      <p class="mb-4">Number of courses</p>
                      <p class="fs-30 mb-2">34040</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade4">
                    <div class="card-body">
                      <p class="mb-4">Number of professors</p>
                      <p class="fs-30 mb-2">47033</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Students Report</h3>
                  <div class="box-tools pull-right">
                    <form class="form-inline">
                      <div class="form-group">
                        <label>Select Year :  </label>
                        <select class="form-control input-sm" id="select_year">
                          <option selected>2020</option>
                          <option>2021</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <br>
                    <div id="legend" class="text-center"></div>
                    <canvas id="barChart" style="height:350px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">To Do Lists</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Meeting with Team 4
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														send documents to students
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Upload forms
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Check with team leaders
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Upload lectures
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-2">
										<button class="btn btn-danger"></i>Add new task</button>
									</div>
								</div>
							</div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. <a href="#" target="_blank">Learning curve</a> from MIU. All rights reserved.</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
</body>

<?php
  $months = array();
  $sales = array();
  for( $m = 1; $m <= 12; $m++ ) {
    array_push($sales, round(100, 2));
    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }

  $months = json_encode($months);
  $sales = json_encode($sales);

?>
<!-- End Chart Data -->
<script>
$(function(){
  var barChartCanvas = $('#barChart').get(0).getContext('2d')
  var barChart = new Chart(barChartCanvas)
  var barChartData = {
    labels  : <?php echo $months; ?>,
    datasets: [
      {
        label               : 'Students',
        fillColor           : 'rgba(193,12,12,0.9)',
        strokeColor : 'rgba(193,12,12,0.9)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : <?php echo $sales; ?>
      }
    ]
  }
  //barChartData.datasets[1].fillColor   = '#00a65a'
  //barChartData.datasets[1].strokeColor = '#00a65a'
  //barChartData.datasets[1].pointColor  = '#00a65a'
  var barChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
  }

  barChartOptions.datasetFill = false
  var myChart = barChart.Bar(barChartData, barChartOptions)
  document.getElementById('legend').innerHTML = myChart.generateLegend();
});
</script>

@endsection

