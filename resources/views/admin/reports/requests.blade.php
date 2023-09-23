@extends('admin.layout.admin_mainlayout')

@section("title-section")
Requests reports
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
@endsection

@section("admin-jq-section")


    <!-- All Jquery -->
     <!-- -------------------------------------------------------------- -->
     <script src="{{ URL::to('/') }}/assets/libs/jquery/dist/jquery.min.js"></script>
     <!-- Bootstrap tether Core JavaScript -->
     <script src="{{ URL::to('/') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <!-- apps -->
     <script src="{{ URL::to('/') }}/dist/js/app.min.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/app.init.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/app-style-switcher.js"></script>
     <!-- slimscrollbar scrollbar JavaScript -->
     <script src="{{ URL::to('/') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
     <script src="{{ URL::to('/') }}/assets/extra-libs/sparkline/sparkline.js"></script>
     <!--Wave Effects -->
     <script src="{{ URL::to('/') }}/dist/js/waves.js"></script>
     <!--Menu sidebar -->
     <script src="{{ URL::to('/') }}/dist/js/sidebarmenu.js"></script>
     <!--Custom JavaScript -->
     <script src="{{ URL::to('/') }}/dist/js/feather.min.js"></script>
     <script src="{{ URL::to('/') }}/dist/js/custom.min.js"></script>
     <!-- This Page JS -->
     <!-- Chart JS -->
    
     <script src="{{ URL::to('/') }}/assets/libs/chart.js/dist/Chart.min.js"></script>
     <script>
         $(function () {
  "use strict";
  // Bar chart
  new Chart(document.getElementById("bar-chart"), {
    type: "bar",
    data: {
      labels: [
          <?php
           foreach($data as $row)
           {
          ?>
          "<?php  echo $row["month"]; ?>",

          <?php 
             
        } 
           ?>
        ],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: [
            "#03a9f4",
            "#e861ff",
            "#08ccce",
            "#e2b35b",
            "#e40503",
          ],
          data: [
            <?php
           foreach($data as $row)
           {
          ?>
              <?php echo $row["totalcount"]; ?>,
              <?php 
             
            } 
               ?>
          ],
        },
      ],
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        fontColor: "#b2b9bf",
        text: "Predicted world population (millions) in 2050",
      },
      scales: {
        yAxes: [
          {
            ticks: {
              fontColor: "#b2b9bf",
              fontSize: 12,
            },
          },
        ],
        xAxes: [
          {
            ticks: {
              fontColor: "#b2b9bf",
              fontSize: 12,
            },
          },
        ],
      },
    },
  });

  // line second
});

    </script>
@endsection

@section("admin-report-requests-section")
<html>
    <body>
        <center>
            <div class="col-lg-10">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                            <h3 class="card-title mb-0">Monthly Requests </h3>
                            </div>
                            <div class="card-body">
                            <div>
                                <canvas id="bar-chart" height="150"></canvas>
                            </div>
                            </div>
                        </div>
                        </div>
        </center>    
    </body>    
</html>
@endsection