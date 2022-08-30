<!DOCTYPE html>
<html>


<head>
  <title>PANEL ADMIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset_admin/css/pay.css">
  <link href="<?=base_url()?>asset_admin/plugin/datatables/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <link href="<?=base_url()?>asset_admin/plugin/jqueryui/jquery-ui.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset_admin/plugin/jqueryui/jquery-ui.structure.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset_admin/plugin/jqueryui/jquery-ui.theme.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src="<?=base_url()?>asset_admin/plugin/jqueryui/jquery-ui.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script src="<?=base_url()?>asset_admin/plugin/autonumeric/autoNumeric.js"></script>
  <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>asset_admin/plugin/datatables/datatables-responsive/dataTables.responsive.js"></script>
  <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>
  <script defer src="<?=base_url()?>asset_admin/js/pay.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <script defer src="<?=base_url()?>asset_admin/js/sidenav.js"></script>
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="<?=base_url()?>">
          <img src="<?=base_url()?>asset/logo/arthapos.png" width="200px" height="100px">
        </a>
        <div id="close-sidebar" style="z-index: 100;">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="<?=base_url()?>asset/icon/foto.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>

          <span class="user-role">Administrator</span>
          <!-- <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span> -->

        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Menus</span>
          </li>

          <li>
            <a href="<?=base_url()?>">
              <i class="far fa-circle"></i>
              <span>Dasboard</span>
            </a>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-box"></i>
              <span>Perusahaan</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#" onclick="directLink(_BASE+'Perusahaan')">Data Perusahaan</a>
                </li>
                <li>
                  <a href="#" onclick="directLink(_BASE+'User')">Data User</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
              <i class="far fa-circle"></i>
              <span>Paket</span>
            </a>
          </li>
          
          <!-- <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li> -->

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-box"></i>
              <span>Menu Barang</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#" onclick="directLink(_BASE+'Barang')">Input Barang</a>
                </li>
                <li>
                  <a href="#" onclick="directLink(_BASE+'Kategori')">Input Kategori</a>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <a href="#" onclick="directLink(_BASE+'Supplier')">
              <i class="fa fa-truck"></i>
              <span>Supplier</span>
            </a>
          </li>

          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>E-commerce</span>
              <span class="badge badge-p
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products
                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li> -->

         <!--  <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li> -->

         <!--  <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li> -->

          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> -->

         <!--  <li class="header-menu">
            <span>Extra</span>
          </li>
          
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <!-- <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div> -->

  </nav>
  <!-- sidebar-wrapper  -->

  
  <main class="page-content">

    <div class="container-fluid">

      <div id="loading" style="
              text-align: center;
             /* position: absolute;*/
              height: 100vh;
              width: 100%;
              top: 0px;
              z-index: 1060;
              display: flex;
              justify-content: center;
              align-items: center;
              flex-direction: column;

          ">
              <img src="<?=base_url()?>asset_admin/image/animasi/loading.gif" class="loading">
              <p style="font-family: propins; font-size: 20px;">Loading .. </p>
      </div>

      <div style="width: 100%;" id="main-menu">
        
      </div>

    </div>
  </main>
  <!-- page-content" -->
</div>

<script type="text/javascript">
  
  var _BASE = "<?=base_url()?>";

  $('#loading').hide();
  $(document).ajaxStart(function(){
      $('#loading').show();
      // $('#main-menu').hide();
   }).ajaxStop(function(){
      $('#main-menu').show();
      $('#loading').hide();
  });

</script>
    
</body>

</html>