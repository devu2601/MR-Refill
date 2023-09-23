@extends('admin.layout.admin_mainlayout')

@section("title-section")
Dashboard
@endsection

@section("admin-css-section")
<!-- this page js -->
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
     <link href="{{ URL::to('/') }}/assets/extra-libs/css-chart/css-chart.css" rel="stylesheet" />
     <!-- Vector CSS -->
     <link href="{{ URL::to('/') }}/assets/libs/jvectormap/jquery-jvectormap.css" rel="stylesheet" />
     <!-- Custom CSS -->
     <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
     <!-- <link href="{{ URL::to('/') }}/assets/images/clock300x300.jpg" rel="stylesheet" /> -->
     <style>
       #clockContainer 
        {
            position: relative;
            margin: auto;
            height: 25vw;
            /*to make the height and width responsive*/
            width: 25vw;
            background: url({{ URL::to('/') }}/assets/images/clock300x300.png) no-repeat;
            /*setting our background image*/
            background-size: 100%;
        }
          
        #hour,
        #minute,
        #second 
        {
            position: absolute;
            background: black;
            border-radius: 10px;
            transform-origin: bottom;
        }
          
        #hour
        {
            width: 1.8%;
            height: 25%;
            top: 25%;
            left: 48.85%;
            opacity: 0.8;
        }
          
        #minute 
        {
            width: 1.6%;
            height: 30%;
            top: 19%;
            left: 48.9%;
            opacity: 0.8;
        }
          
        #second 
        {
            width: 1%;
            height: 40%;
            top: 9%;
            left: 49.25%;
            opacity: 0.8;
        }
     </style>
@endsection

@section("admin-jq-section")
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
    <script src=".{{ URL::to('/') }}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ URL::to('/') }}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::to('/') }}/dist/js/feather.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js"></script>
    <!-- Chart JS -->
    <script src="{{ URL::to('/') }}/dist/js/pages/dashboards/dashboard3.js"></script>
    <!-- Chart JS -->
   <!-- All Jquery -->
     <!-- -------------------------------------------------------------- -->
     
     <!-- This Page JS -->
     <!-- Chart JS -->
     <script src="{{ URL::to('/') }}/assets/libs/chart.js/dist/Chart.min.js"></script>
    <!--  clock script  -->
    <script>
      setInterval(() => {
    d = new Date(); //object of date()
    hr = d.getHours();
    min = d.getMinutes();
    sec = d.getSeconds();
    hr_rotation = 30 * hr + min / 2; //converting current time
    min_rotation = 6 * min;
    sec_rotation = 6 * sec;
  
    hour.style.transform = `rotate(${hr_rotation}deg)`;
    minute.style.transform = `rotate(${min_rotation}deg)`;
    second.style.transform = `rotate(${sec_rotation}deg)`;
}, 1000);
    </script>
    <!-- clock script over  -->
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
          label: "Monthly Requests in 2021-2022",
          backgroundColor: [
            "#03a9f4",
            "#e861ff",
            "#08ccce",
            "#e2b35b",
            "#e40503",
            "#03a9f4",
            "#e861ff",
            "#08ccce",
            "#e40503",
            "#03a9f4",
            "#e861ff",
            "#08ccce",
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
        text: "Requests in 2020",
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
<script>
        $(function () {
  "use strict";
  // Bar chart
  new Chart(document.getElementById("bar-chart 2"), {
    type: "bar",
    data: {
      labels: [
          <?php
           foreach($data2 as $row)
           {
          ?>
          "<?php  echo $row["month"]; ?>",

          <?php 
        } 
           ?>
        ],
      datasets: [
        {
          label: "orders",
          backgroundColor: [
            "#03a9f4",
            "#e861ff",
            "#08ccce",
            "#e2b35b",
            "#e40503",
            "#03a9f4",
            "#e861ff",
            "#e2b35b",
            "#e40503",
            "#03a9f4",
            "#e861ff",
          ],
          data: [
            <?php
           foreach($data2 as $row)
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
        text: "Monthly orders in 2021-2022",
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

<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Dashboard </h3>
             </div>
             
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- End Bread crumb and right sidebar toggle -->
           <!-- -------------------------------------------------------------- -->
           <!-- Start row -->
           <div class="row">
             <div class="col-lg-3 col-md-6">
               <div class="card bg-info">
                 <div class="card-body">
                   <div class="d-flex no-block">
                     <div class="me-3 align-self-center">
                       <img src="../../assets/images/icon/income-w.png" alt="Income" />
                     </div>
                     <div class="align-self-center">
                       <h6 class="text-white mt-2 mb-0">Total Request </h6>
                       <h2 class="mt-0 text-white">{{ $exreq }} </h2>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="card bg-success">
                 <div class="card-body">
                   <div class="d-flex no-block">
                     <div class="me-3 align-self-center">
                       <img src="../../assets/images/icon/expense-w.png" alt="Income" />
                     </div>
                     <div class="align-self-center">
                       <h6 class="text-white mt-2 mb-0">Total Order </h6>
                       <h2 class="mt-0 text-white">{{ $order }} </h2>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="card bg-primary">
                 <div class="card-body">
                   <div class="d-flex no-block">
                     <div class="me-3 align-self-center">
                       <img src="../../assets/images/icon/assets-w.png" alt="Income" />
                     </div>
                     <div class="align-self-center">
                       <h6 class="text-white mt-2 mb-0">Total User </h6>
                       <h2 class="mt-0 text-white">{{ $users }} </h2>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="card bg-danger">
                 <div class="card-body">
                   <div class="d-flex no-block">
                     <div class="me-3 align-self-center">
                       <img src="../../assets/images/icon/staff-w.png" alt="Income" />
                     </div>
                     <div class="align-self-center">
                       <h6 class="text-white mt-2 mb-0">Total Staff </h6>
                       <h2 class="mt-0 text-white">{{ $employee }} </h2>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- End row -->
           <!-- Start row -->
           <div class="row">
           <div class="col-lg-6">
                        <div class="card">
                            <div class="title-part-padding border-bottom">
                                <h4 class="card-title mb-0">Monthly Request </h4>
                            </div>
                            <div class="card-body">
                             <canvas id="bar-chart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
             
             <div class="col-lg-6">
              <div id="clockContainer">
                <div id="hour"></div>
                <div id="minute"></div>
                <div id="second"></div>
              </div>
             </div>
             
           </div>
           <!-- End row -->
           <!-- Start row -->
           <div class="row">
             <div class="col-lg-4">
               <div class="card bg-success text-white">
                 <div class="card-body">
                   <div class="d-flex">
                     <div class="stats">
                       <h1 class="text-white">{{ $product }}</h1>
                       <h6 class="text-white">Total Products </h6>
                       <!-- <button class="
                          btn btn-rounded btn-outline btn-light
                          m-t-10
                          fs-3
                        ">
                        _____ list
                       </button> -->
                     </div>
                     <div class="stats-icon text-end ms-auto">
                     <i data-feather="life-buoy" height="70px" class="feather-icon"></i>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="card bg-primary text-white">
                 <div class="card-body">
                   <div class="d-flex">
                     <div class="stats">
                       <h1 class="text-white">{{ $brand }} </h1>
                       <h6 class="text-white">Total Brands </h6>
                       <!-- <button class="
                          btn btn-rounded btn-outline btn-light
                          m-t-10
                          fs-3
                        ">
                        _____ list
                       </button> -->
                     </div>
                     <div class="stats-icon text-end ms-auto">
                       <i data-feather="slack" height="70px" class="feather-icon"></i> 
                     </div>
                   </div>
                 </div>
               </div>
               <div class="card bg-info text-white">
                 <div class="card-body">
                   <div class="d-flex">
                     <div class="stats">
                       <h1 class="text-white">{{ $model }} </h1>
                       <h6 class="text-white">Total Models </h6>
                       <!-- <button class="
                          btn btn-rounded btn-outline btn-light
                          m-t-10
                          fs-3
                        ">
                        _____ list
                       </button> -->
                     </div>
                     <div class="stats-icon text-end ms-auto">
                     <i data-feather="codepen" height="70px" class="feather-icon"></i>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-lg-8">
               <div class="card">
                 <div class="card-body">
                   <div class="d-md-flex">
                     <h4 class="card-title">
                       <span class="lstick d-inline-block align-middle"></span>Monthly Order
                     </h4>
                   </div>
                   <div class="card-body">
                             <canvas id="bar-chart 2" height="150"></canvas>
                            </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- End row -->
           <!-- Start Row -->
           <div class="row">
             <div class="col-lg-6 d-flex align-items-stretch">
               <div class="card w-100">
                 <div class="card-body">
                   <div class="d-md-flex">
                     <div>
                       <h4 class="card-title">
                         <span class="lstick d-inline-block align-middle"></span>Recent Request
                       </h4>
                     </div>
                   </div>
                   <div class="table-responsive mt-3">
                     <table class="table v-middle no-wrap mb-0">
                       <thead>
                         <tr>
                           <th class="border-0">User name </th>
                           <th class="border-0">Date & Time </th>
                           <th class="border-0">Status </th>
                         </tr>
                       </thead>
                       <tbody>
                       @foreach($exdata as $row)
                         <tr>
                           
                              <td>{{ $row->user_name }}</td>
                              <td><?php  echo date('d-m-Y',strtotime($row->request_date_time));  ?></td>
                              <td>{{ $row->exchange_status }}</td>
                           
                         </tr>
                         @endforeach
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
             <!-- -------------------------------------------------------------- -->
             <!-- Activity widget find scss into widget folder-->
             <!-- -------------------------------------------------------------- -->
             <div class="col-lg-6 d-flex align-items-stretch">
               <div class="card w-100">
                 <div class="card-body">
                   <div class="d-md-flex">
                     <div>
                       <h4 class="card-title">
                         <span class="lstick d-inline-block align-middle"></span>Recent Order
                       </h4>
                     </div>
                   </div>
                   <div class="table-responsive mt-3">
                     <table class="table v-middle no-wrap mb-0">
                       <thead>
                         <tr>
                           <th class="border-0">User name </th>
                           <th class="border-0">Date & Time </th>
                           <th class="border-0">Status </th>
                         </tr>
                       </thead>
                       <tbody>
                       @foreach($orderdata as $row)
                         <tr>
                           
                              <td>{{ $row->user_name }}</td>
                              <td><?php  echo date('d-m-Y',strtotime($row->order_date_time));  ?></td>
                              <td>{{ $row->order_status }}</td>
                           
                         </tr>
                         @endforeach
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- End Row -->
           <!-- Start row -->
           
@endsection

