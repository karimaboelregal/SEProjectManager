
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
                  <h3 class="font-weight-bold">Welcome {{ Session::get('userData')->Surname }}</h3>
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
                      <p class="fs-30 mb-2">{{$TotalStudents}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade2">
                    <div class="card-body">
                      <p class="mb-4">Number of projects</p>
                      <p class="fs-30 mb-2">{{$TotalProjects}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade3">
                    <div class="card-body">
                      <p class="mb-4">Number of courses</p>
                      <p class="fs-30 mb-2">{{$TotalCourses}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 stretch-card transparent">
                  <div class="card card-red-shade4">
                    <div class="card-body">
                      <p class="mb-4">Number of professors</p>
                      <p class="fs-30 mb-2">{{$TotalProffesors}}</p>
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
                    <form action="{{route('UpdateTask')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @foreach ($TODO_List as $Todo)
											<li class="complete">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
                            <input type="hidden" name="id" value="{{$Todo->id}}">
														<input class="checkbox" value="{{$Todo->id}}" name="Todo[]" type="checkbox">
														{{$Todo->TODO_Description}}
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
                      @endforeach
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-2">
                  <div class="col-md-4">
                    <input type="submit" class="btn btn-success" value="Update List">
                  </form>
                  </div>
                  <div class="col-md-5">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#HistoryModal"></i>Weekly history</button>
                  </div>
                  <div class="col-md-6">
                  <button class="btn btn-danger" data-toggle="modal" data-target="#TaskModal"></i>Add new task</button>
                  </div>
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

  <!-- Modal -->
<div class="modal fade" id="TaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add new task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('createNewTask')}}" method="post">
          <div class="modal-body">
                  {{csrf_field()}}
                  <div class="form-group"><label for="name" class=" form-control-label">Task Description</label>
                      <input type="text" id="Taskname" name="TaskName" placeholder="Enter Task" class="form-control">
                  </div>
           </div>
          <div class="modal-footer">
            <div class="form-group">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                <button class="btn btn-outline" type="submit" value="submit">submit</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal update-->
<div class="modal fade" id="TaskModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update tasks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              Are You sure you want to remove done tasks ?
           </div>
          <div class="modal-footer">
            <div class="form-group">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                <button class="btn btn-outline" type="submit" value="submit">submit</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="HistoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Weekly done tasks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card-body">
									<h4 class="card-title">Done To Do Lists</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                    @foreach ($Done_List as $Done)
											<li class="complete">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														{{$Done->TODO_Description}}
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
                      @endforeach
										</ul>
                  </div>
           </div>
          <div class="modal-footer">
            <div class="form-group">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

</body>

<?php
  $months = array();
  $sales = array();
  for( $m = 1; $m <= 12; $m++ ) {
    array_push($sales, round(10, 1));
    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }

  $months = json_encode($months);
  $sales = json_encode($sales);

?>
<!-- End Chart Data and checkbox-->
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
          strokeColor         : 'rgba(193,12,12,0.9)',
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

