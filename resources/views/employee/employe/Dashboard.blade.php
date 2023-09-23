@extends('employee.layout.employe__mainlayout')

@section("title-section")
Dashboard
@endsection

@section("employe-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/adminlte.min.css" rel="stylesheet" />
@endsection

@section("employe-jq-section")
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
    <!--This page JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Chart JS -->
    <script src="{{ URL::to('/') }}/dist/js/pages/dashboards/dashboard1.js"></script>

    <!-- All Jquery -->
     <!-- -------------------------------------------------------------- -->
     
     <!-- This Page JS -->
     <!-- Chart JS -->
     <!-- <script src="../../dist/js/pages/chartjs/chartjs.init.js"></script> -->
     <script src="../../assets/libs/chart.js/dist/Chart.min.js"></script>
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

@section("dashboard-main-section")
<section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-exchange-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Exchange Request</span>
                            <span class="info-box-number">
                               <h3>{{ $exreq }}</h3>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-hourglass"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Pending Request </span>
                            <span class="info-box-number">
                               <h3>{{ $expen }}</h3> 
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Complete Request</span>
                            <span class="info-box-number">
                                <h3>{{ $excom }}</h3>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                
                <div class="col-lg-12">
               <div class="card">
                 <div class="border-bottom title-part-padding">
                   <center><h4 class="card-title mb-0"><b>Exchange Request Reports</b></h4></center>
                 </div>
                 <div class="card-body">
                   <div>
                     <canvas id="bar-chart" height="100"></canvas>
                   </div>
                 </div>
               </div>
             </div>
             
             
                <!-- /.col -->
            </div>
        </div>
@endsection