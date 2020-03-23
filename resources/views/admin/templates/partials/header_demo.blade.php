      <header class="main-header">
        <!-- Logo -->
        <a href="http://wbdesign.co/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini lora-normal"><img src="{{ asset('WBplataform/dist/img/logo.ico')}}" width="30px"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg lora-normal blanco"><img src="{{ asset('WBplataform/dist/img/logo.ico')}}" width="27px"> &nbsp <b class="blanco">WB</b>plataform Demo</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->

              <!-- Tasks: style can be found in dropdown.less -->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/Imagenes/Demo/wbPlataform_1458709278.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Cliente</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header image">
                    <img src="/Imagenes/Demo/wbPlataform_1458709278.png" class="img-rounded" alt="User Image">
                    <p>
                      Cliente
                      <small>Miembro oficial WBdesign</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="http://wbdesign.co/" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->

            </ul>
          </div>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/Imagenes/Demo/wbPlataform_1458709278.png" class="img-rounded" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Cliente</p>
              <p href="#"><i class="fa fa-circle text-success"></i> Online</p>
            </div>
          </div>
          <!-- search form EStoy configurandolo para cada sección-->
        <!-- Barra de busqueda -->



          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">PANEL DE ADMINISTRACIÓN</li>
            <li class="treeview">
              <a href="{{ route('admin.index')}}">
                <i class="glyphicon glyphicon-home"></i><span>Bienvenido</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="{{ route('admin.clients.index')}}">
                <i class="glyphicon glyphicon-user"></i>
                <span>Clientes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Demo/Clientes"><i class="fa fa-circle-o text-aqua"></i> Buscar </a></li>
                <li><a href="/Demo/Clientes/Crear"><i class="fa fa-circle-o text-aqua"></i> Crear </a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span>Productos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Demo/Productos"><i class="fa fa-circle-o text-aqua"></i>Buscar</a></li>
                <li><a href="/Demo/Productos/Crear"><i class="fa fa-circle-o text-aqua"></i> Crear productos</a></li>
                <li><a href="/Demo/Productos/Categorias"><i class="fa fa-circle-o text-aqua"></i> Categorias</a></li>
                <li><a href="/Demo/Productos/Etiquetas"><i class="fa fa-circle-o text-aqua"></i> Etiquetas</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-wrench"></i> <span>Mi web</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Demo/Contenidos"><i class="fa fa-circle-o text-aqua"></i>Mi contenido</a></li>
                <li><a href="/Demo/Galerias"><i class="fa fa-circle-o text-aqua"></i>Mis galerias</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-credit-card"></i> <span>E-Comerce</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i>En desarrollo</a></span></li>


              </ul>
            </li>

            <li class="header">USUARIO</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Usuarios</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Documentación</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>