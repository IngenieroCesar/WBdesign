			<header class="main-header">
				<!-- Logo -->
				<a href="{{ route('admin.index')}}" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini lora-normal"><img src="{{ asset('WBplataform/dist/img/logo.ico')}}" width="30px"></span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg lora-normal blanco"><img src="{{ asset('WBplataform/dist/img/logo.ico')}}" width="27px"> &nbsp <b class="blanco">WB</b>plataform</span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
		      <div class="navbar-custom-menu">
		        <ul class="nav navbar-nav">
		          <!-- Messages: style can be found in dropdown.less-->
		          <li class="dropdown messages-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <i class="fa fa-envelope-o"></i>
		              <span class="label label-success">4</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="header">You have 4 messages</li>
		              <li>
		                <!-- inner menu: contains the actual data -->
		                <ul class="menu">
		                  <li><!-- start message -->
		                    <a href="#">
		                      <div class="pull-left">
		                        <img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-circle" alt="User Image">
		                      </div>
		                      <h4>
		                        Support Team
		                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
		                      </h4>
		                      <p>Why not buy a new awesome theme?</p>
		                    </a>
		                  </li>
		                  <!-- end message -->
		                  <li>
		                    <a href="#">
		                      <div class="pull-left">
		                        <img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-circle" alt="User Image">
		                      </div>
		                      <h4>
		                        AdminLTE Design Team
		                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
		                      </h4>
		                      <p>Why not buy a new awesome theme?</p>
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <div class="pull-left">
		                        <img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-circle" alt="User Image">
		                      </div>
		                      <h4>
		                        Developers
		                        <small><i class="fa fa-clock-o"></i> Today</small>
		                      </h4>
		                      <p>Why not buy a new awesome theme?</p>
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <div class="pull-left">
		                        <img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-circle" alt="User Image">
		                      </div>
		                      <h4>
		                        Sales Department
		                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
		                      </h4>
		                      <p>Why not buy a new awesome theme?</p>
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <div class="pull-left">
		                        <img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-circle" alt="User Image">
		                      </div>
		                      <h4>
		                        Reviewers
		                        <small><i class="fa fa-clock-o"></i> 2 days</small>
		                      </h4>
		                      <p>Why not buy a new awesome theme?</p>
		                    </a>
		                  </li>
		                </ul>
		              </li>
		              <li class="footer"><a href="#">See All Messages</a></li>
		            </ul>
		          </li>
		          <!-- Notifications: style can be found in dropdown.less -->
		          <li class="dropdown notifications-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <i class="fa fa-bell-o"></i>
		              <span class="label label-warning">10</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="header">You have 10 notifications</li>
		              <li>
		                <!-- inner menu: contains the actual data -->
		                <ul class="menu">
		                  <li>
		                    <a href="#">
		                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
		                      page and may cause design problems
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <i class="fa fa-users text-red"></i> 5 new members joined
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
		                    </a>
		                  </li>
		                  <li>
		                    <a href="#">
		                      <i class="fa fa-user text-red"></i> You changed your username
		                    </a>
		                  </li>
		                </ul>
		              </li>
		              <li class="footer"><a href="#">View all</a></li>
		            </ul>
		          </li>
		          <!-- Tasks: style can be found in dropdown.less -->
		          <li class="dropdown tasks-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <i class="fa fa-flag-o"></i>
		              <span class="label label-danger">9</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="header">You have 9 tasks</li>
		              <li>
		                <!-- inner menu: contains the actual data -->
		                <ul class="menu">
		                  <li><!-- Task item -->
		                    <a href="#">
		                      <h3>
		                        Design some buttons
		                        <small class="pull-right">20%</small>
		                      </h3>
		                      <div class="progress xs">
		                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
		                          <span class="sr-only">20% Complete</span>
		                        </div>
		                      </div>
		                    </a>
		                  </li>
		                  <!-- end task item -->
		                  <li><!-- Task item -->
		                    <a href="#">
		                      <h3>
		                        Create a nice theme
		                        <small class="pull-right">40%</small>
		                      </h3>
		                      <div class="progress xs">
		                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
		                          <span class="sr-only">40% Complete</span>
		                        </div>
		                      </div>
		                    </a>
		                  </li>
		                  <!-- end task item -->
		                  <li><!-- Task item -->
		                    <a href="#">
		                      <h3>
		                        Some task I need to do
		                        <small class="pull-right">60%</small>
		                      </h3>
		                      <div class="progress xs">
		                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
		                          <span class="sr-only">60% Complete</span>
		                        </div>
		                      </div>
		                    </a>
		                  </li>
		                  <!-- end task item -->
		                  <li><!-- Task item -->
		                    <a href="#">
		                      <h3>
		                        Make beautiful transitions
		                        <small class="pull-right">80%</small>
		                      </h3>
		                      <div class="progress xs">
		                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
		                          <span class="sr-only">80% Complete</span>
		                        </div>
		                      </div>
		                    </a>
		                  </li>
		                  <!-- end task item -->
		                </ul>
		              </li>
		              <li class="footer">
		                <a href="#">View all tasks</a>
		              </li>
		            </ul>
		          </li>

							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="user-image" alt="User Image">
									<span class="hidden-xs">{{ Auth::user()->name}}</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header image">
										<img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-rounded" alt="User Image">
										<p>
											{{ Auth::user()->name}}
											<small>Miembro oficial WBdesign</small>
										</p>
									</li>
									<!-- Menu Body -->

									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="{{ route('admin.users.index')}}" class="btn btn-default btn-flat">Perfil</a>
										</div>
										<div class="pull-right">
											<a href="{{ route('admin.auth.logout')}}" class="btn btn-default btn-flat">Cerrar Sesión</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->
							<li>
		            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
		          </li>
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
									<img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-circle" alt="User Image">
			        </div>
			        <div class="pull-left info">
			          <p>{{ Auth::user()->name}}</p>
			          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			        </div>
			      </div>
			      <!-- search form -->
			      <form action="#" method="get" class="sidebar-form">
			        <div class="input-group">
			          <input type="text" name="q" class="form-control" placeholder="Search...">
			              <span class="input-group-btn">
			                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			                </button>
			              </span>
			        </div>
			      </form>
			      <!-- /.search form -->
			      <!-- sidebar menu: : style can be found in sidebar.less -->
			      <ul class="sidebar-menu">
			        <li class="header">EMPLEADOS</li>
							<li class="active treeview">
								<a href="{{ route('admin.index')}}">
									<i class="fa fa-home"></i> <span>Home</span>
									<span class="pull-right-container">
										<small class="label pull-right bg-red">3</small>
									</span>
								</a>
							</li>
			        <li>
			          <a href="#">
			            <i class="fa fa-users"></i> <span>Empleados</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li class="active"><a href="{{ route('admin.users.index')}}"><i class="fa fa-circle-o"></i>Lista de Empleados</a></li>
			            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
			          </ul>
			        </li>
							<li>
								<a href="{{ route('admin.actividades.index')}}">
									<i class="fa fa-calendar"></i> <span>Calendar</span>
									<span class="pull-right-container">
										<small class="label pull-right bg-red">3</small>
										<small class="label pull-right bg-blue">17</small>
									</span>
								</a>
							</li>
							<li>
			          <a href="{{ route('admin.mails.index')}}">
			            <i class="fa fa-envelope"></i> <span>Mailbox</span>
			            <span class="pull-right-container">
			              <small class="label pull-right bg-yellow">12</small>
			              <small class="label pull-right bg-green">16</small>
			              <small class="label pull-right bg-red">5</small>
			            </span>
			          </a>
			        </li>
							<li class="header">PAGINA WEB</li>
			        <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pencil-square-o"></i>
			            <span>Editor Web</span>
			            <span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="{{ route('admin.myweb.contents.index')}}"><i class="fa fa-circle-o"></i>Actualizar Contenido</a></li>
			            <li><a href="{{ route('admin.myweb.galeries.index')}}"><i class="fa fa-circle-o"></i>Actualizar Imagenes</a></li>
			          </ul>
			        </li>
			        <li class="treeview">
			          <a href="#">
			            <i class="fa fa-cc-mastercard"></i>
									<span>Ventas En Linea</span>
			            <span class="pull-right-container">
			            	<span class="label label-primary pull-right">4</span>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
			            <li>
			              <a href="#"><i class="fa fa-circle-o"></i> Level One
			                <span class="pull-right-container">
			                  <i class="fa fa-angle-left pull-right"></i>
			                </span>
			              </a>
			              <ul class="treeview-menu">
			                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
			                <li>
			                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
			                    <span class="pull-right-container">
			                      <i class="fa fa-angle-left pull-right"></i>
			                    </span>
			                  </a>
			                  <ul class="treeview-menu">
			                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
			                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
			                  </ul>
			                </li>
			              </ul>
			            </li>
			            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
			          </ul>
			        </li>

							<li class="header">FACTURACIÓN</li>
							<li class="treeview">
			          <a href="#">
			            <i class="fa fa-user"></i>
			            <span>Contactos</span>
			            <span class="pull-right-container">
			              <span class="label label-primary pull-right">4</span>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
			            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
			            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
			            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
			          </ul>
			        </li>
							<li class="treeview">
			          <a href="#">
			            <i class="fa fa-file-text-o"></i>
			            <span>Facturas</span>
			            <span class="pull-right-container">
			              <span class="label label-primary pull-right">4</span>
			            </span>
			          </a>
			        </li>
							<li class="treeview">
			          <a href="{{ route('admin.articles.index')}}">
			            <i class="fa fa-archive"></i>
			            <span>Inventario</span>
			            <span class="pull-right-container">
			              <span class="label label-primary pull-right">4</span>
			            </span>
			          </a>
			        </li>
							<li class="treeview">
			          <a href="#">
			            <i class="fa fa-files-o"></i>
			            <span>Reportes</span>
			            <span class="pull-right-container">
			              <span class="label label-primary pull-right">4</span>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
			            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
			            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
			            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
			          </ul>
			        </li>
							<li class="header">CONFIGURACIÓN</li>
							<li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
							<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
			        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
			        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>

			      </ul>
			    </section>
			    <!-- /.sidebar -->
			  </aside>
