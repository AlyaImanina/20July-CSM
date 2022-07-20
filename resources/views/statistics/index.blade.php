@extends('dashboards.admins.layouts.main')
@section('content')
    
<div class="content">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-6 p-4">
          <a href="{{ route('registersmes.index') }}">
            <div class="card text-dark bg-light shadow-lg bg-white rounded">
              <h5 class="card-header text-center fw-bold">SME</h5>
              <div class="card-body">
                <h3 class="card-title text-center">{{ $registersmes }}</h3>
                <div class="card-text text-center">
                  <i class="fa fa-users " style="font-size:60px; color:#d8760c;"></i>
                </div>
              </div>
            </div>
          </a>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-6 p-4">
        <a href="{{ route('registermps.index') }}">
          <div class="card text-dark bg-light shadow-lg bg-white rounded">
            <h5 class="card-header text-center fw-bold">Authorise Partners</h5>
            <div class="card-body">
              <h3 class="card-title text-center">{{ $registermps }}</h3>
              <div class="card-text text-center">
                <i class="fa fa-user-secret" style="font-size:60px; color:#d8760c;"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
      </div>
      <div class="row">
        {{-- ----------------------barChart------------------------------------------ --}}
        <div class="col-lg-7 col-md-12 col-sm-12 p-4">
          <div class="card text-dark bg-light bg-white rounded">
            <div class="card-body">
              <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
              <script>
                var xValues = ["Kuala Lumpur", "Selangor", "Johor", "Negeri Sembilan", "Perak", "Pulau Pinang", "Sarawak"];
                var yValues = [55, 49, 70, 50, 73, 55, 49];
                var barColors = [
                  "red", 
                  "green",
                  "blue",
                  "brown",
                  "purple",
                  "orange",
                  "yellow"
              ];
                new Chart("myChart", {
                  type: "bar",
                  data: {
                  labels: xValues,
                  datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                  }]
                },
                options: {
                  legend: {display: false},
                  title: {
                    display: true,
                    text: "Statistics of SMEs Location"
                  }
                }
              });
              </script>
            </div>
          </div>
        </div>

        {{-- ----------------------pieChart------------------------------------------ --}}
          <div class="col-lg-5 col-md-12 col-sm-12 p-4">
            <div class="card text-dark bg-light bg-white rounded">
              <div class="card-body ">
                <div id="piechart"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    // Load google charts
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);
      
                      // Draw the chart and set the chart values
                      function drawChart() {
                      var data = google.visualization.arrayToDataTable([
                      ['Status of Companies Responded', 'Number of Comapnies'],
                      ['Under Evaluation', 28],
                      ['Kiv', 30],
                      ['Awaiting Qs Submission', 3],
                      ['Duplicate, Take Latest Data', 3]
                    ]);
      
                      // Optional; add a title and set the width and height of the chart
                      var options = {'title':'Status of Companies Responded', 'width':400, 'height':230};
      
                      // Display the chart inside the <div> element with id="piechart"
                      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                      chart.draw(data, options);
                    }
                  </script>
                </div>
              </div>
            </div>
          </div>
    </div>  
</div>
@endsection