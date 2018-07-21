<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Planeador Financiero
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          G&B
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="views/dashboard.html">
              <i class="nc-icon"><ion-icon name="contacts"></ion-icon></i>
              <p>Registro</p>
            </a>
          </li>
          <li >
            <a href="ingresos.php">
              <i class="nc-icon"><ion-icon name="logo-usd"></ion-icon></i>
              <p>Ingresos</p>
            </a>
          </li>
          <li class="active">
            <a href="ahorros.php">
              <i class="nc-icon"><ion-icon name="done-all"></ion-icon></i>
              <p>Ahorros</p>
            </a>
          </li>
          <li>
           <a href="views/map.html">
              <i class="nc-icon"><ion-icon name="calculator"></ion-icon></i>
              <p>Gastos</p>
            </a>
          </li>
          <li>
            
          </li>
          <li>
            
          </li>
          <li>
            
          </li>
          <li class="active-pro">
            
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Cliente</a>
          </div>
       
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
               
                <div class="input-group-append">
                 
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                
              </li>
              <li class="nav-item btn-rotate dropdown">
                
              
              </li>
              <li class="nav-item">
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
      <div class="content">
       
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Información de ahorros</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
               
              </div>
              <div class="card-footer ">
                <!-- formulario -->
              <form>
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      
                    </div>
                    
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tipo de ahorro</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-2 pr-1">
                      
                    </div>
                    
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">CDA ó CDT</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-2 pr-1">
                      
                    </div>
                    
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ahorro fondo</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-2 pr-1">
                      
                    </div>
                    
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pensiones</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-2 pr-1">
                      
                    </div>
                    
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cesantías</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                  
                   <div class="row">
                    <div class="col-md-2 pr-1">
                      
                    </div>
                    
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Otros ahorros</label>
                        <input type="email" class="form-control" placeholder="$">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                   
                   <div class="row">
                    <div class="col-md-6 pr-1">
                      
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Total</label>
                        <input type="email" class="form-control" placeholder="$">
                      </div>
                    </div>
                     <div class="col-md-2 pr-1">
                      
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">REGISTRAR</button>
                    </div>
                  </div>
                </form>

                <!-- fin formulario -->
                <hr>
              </div>
            </div>
          </div>
        </div>
              </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, Hecho por Brainstorm Technology
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>

  <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>