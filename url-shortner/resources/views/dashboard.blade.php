<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tahrim Url Shortner</title>
@include('layouts.style')  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @section('main')
<div class="wrapper">

  <!-- Preloader -->
  @include('layouts.preloader')

  <!-- Navbar -->
  @include('layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @section('edit')
  @yield('edit')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <h3> Welcome, {{Auth::user()->name }}!!!</h3>
                
                

                
              </div>
              
             
            </div>
          </div>
          <div class="col-lg-12 col-6">
            @php
   $short = array(); 
   $click = array();
   if($url!=null){
   foreach ($url->Url as $item) {
    
    array_push($short, $item->short_url);
    array_push($click, $item->click);
}
}
@endphp
            <canvas id="myChart" style="width:100%;max-width:700px" class="mb-2"></canvas>
          </div>

          <div class="col-lg-12 col-6">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                   <tr>
                    <th>Original Url</th>
                    <th> Short Url</th>
                    <th>Number of Click</th>
                   </tr>
                  </thead>
                  <tbody>
                    @foreach($url->url as $u)
                    <tr>
                      <td>{{$u->long_url}}</td>
                      <td>{{$u->short_url}}</td>
                      <td>{{$u->click}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @show
  <!-- /.content-wrapper -->
  @include('layouts.footer')
</div>

@show
<!-- ./wrapper -->

<!-- jQuery -->
@section('script')
@yield('script')

@include('layouts.script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
  
  const xValues = @json($short);
  const yValues = @json($click);
  const barColors = [
    "#b91d47",
    "#00aba9",
    "#2b5797",
    "#e8c3b9",
    "#1e7145"
  ];
  
  new Chart("myChart", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "Url Vs how many times they have been hited"
      }
    }
  });
  </script>
@show
</body>
</html>
