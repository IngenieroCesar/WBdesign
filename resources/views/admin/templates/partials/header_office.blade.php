			<header class="main-header">
				<!-- Logo -->
				<a href="{{ route('office')}}" class="logo">
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
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Messages: style can be found in dropdown.less-->

							<!-- Notifications: style can be found in dropdown.less -->

							<!-- Tasks: style can be found in dropdown.less -->

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
											<small>{{ Auth::user()->type}}</small>
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
							<img src="/Imagenes/Users/{{ Auth::user()->imagen}}" class="img-rounded" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>{{ Auth::user()->name}}</p>
							<p href="#"><i class="fa fa-circle text-success"></i> Online</p>
						</div>
					</div>
					<!-- search form EStoy configurandolo para cada sección-->
				<!-- Barra de busqueda -->



					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">

					<!-- lvl Contador -->
						@if(Auth::user()->type == 'administrador' )

						<li class="header">CONTABILIDAD</li>

						<li class="treeview">
							<a href="{{ route('office')}}">
								<i class="fa fa-home"></i>
								<span>Lobby</span>
							</a>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-money" aria-hidden="true"></i>
								<span>Ingresos</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Factura de Ventas</a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Facturas Recurrentes</a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Pagos Resividos</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Notas Credito</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Cotizaciónes </a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Remisiones </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-money" aria-hidden="true"></i>
								<span>Gastos</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Pagos </a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Pagos Recurrentes</a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Facturas de Proveedores </a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Notas Credito</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Cotizaciónes </a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Remisiones </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-archive" aria-hidden="true"></i>
								<span>Inventario</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Items de Venta </a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Valor de Inventario </a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Ajustes a Inventario </a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Gestion de Items </a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Listas de Precios </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-university" aria-hidden="true"></i>
								<span> Bancos </span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-tags" aria-hidden="true"></i>
								<span>Categorias</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categorias </a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Ajuste de Categorias </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-book" aria-hidden="true"></i>
								<span>Reportes</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
						</li>

						<li class="header">USUARIOS</li>
						<li><a href="{{ route('admin.users.index')}}"><i class="fa fa-users "></i> <span>Usuarios</span></a></li>
						<li><a href="#"><i class="fa fa-file-text "></i> <span>Manual & Documentos</span></a></li>
						@endif
					<!-- end lvl administrador -->

					<!-- lvl Auxiliar -->
					@if(Auth::user()->type == 'administrador web' )

					<li class="header">LOBBY</li>

					<li class="treeview">
						<a href="{{ route('admin.clients.index')}}">
							<i class="glyphicon glyphicon-book"></i>
							<span>Agenda</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('admin.clients.index')}}"><i class="fa fa-circle-o text-aqua"></i> Buscar </a></li>
							<li><a href="{{ route('admin.clients.create')}}"><i class="fa fa-circle-o text-aqua"></i> Crear </a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<span>Mensajes</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
							<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
							<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
							<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
							<span>Calendario</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
							<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
							<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
							<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
						</ul>
					</li>

					<li class="header">ADMINISTRACIOIN WEB</li>

					<li class="treeview">
						<a href="#">
							<i class="glyphicon glyphicon-shopping-cart text-red"></i>
							<span>Servicios</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
							<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
							<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
							<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="glyphicon glyphicon-credit-card text-yellow"></i>
							<span>E-Comerce</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('admin.myweb.contents.index')}}"><i class="fa fa-circle-o text-yellow"></i>En desarrollo</a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							<span>Web Editor</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('admin.myweb.contents.index')}}"><i class="fa fa-circle-o text-aqua"></i>Web Content</a></li>
							<li><a href="{{ route('admin.myweb.galeries.index')}}"><i class="fa fa-circle-o text-aqua"></i>Web Images</a></li>
						</ul>
					</li>

					<li class="header">USUARIOS</li>
					<li><a href="{{ route('admin.users.index')}}"><i class="fa fa-users "></i> <span>Users</span></a></li>
					<li><a href="#"><i class="fa fa-file-text "></i> <span>Manual & Documentos</span></a></li>
					@endif
					<!-- end lvl Administrador Web -->

					<!-- lvl Contador -->
						@if(Auth::user()->type == 'contador' )

						<li class="header">LOBBY</li>

						<li class="treeview">
							<a href="{{ route('admin.clients.index')}}">
								<i class="glyphicon glyphicon-book"></i>
								<span>Agenda</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.clients.index')}}"><i class="fa fa-circle-o text-aqua"></i> Buscar </a></li>
								<li><a href="{{ route('admin.clients.create')}}"><i class="fa fa-circle-o text-aqua"></i> Crear </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span>Mensajes</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
								<span>Calendario</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
							</ul>
						</li>

						<li class="header">CONTABILIDAD</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-building "></i> <span>WBoffice</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="{{ route('admin.myweb.contents.index')}}"><i class="fa fa-circle-o text-blue"></i>Ingresar</a></li>


								</ul>
							</li>

						<li class="header">USUARIOS</li>
						<li><a href="#"><i class="fa fa-file-text "></i> <span>Manual & Documentos</span></a></li>
						@endif
					<!-- end lvl Contador -->

					<!-- lvl Empleado -->
					@if(Auth::user()->type == 'empleado' )

						<li class="header">LOBBY</li>

						<li class="treeview">
							<a href="{{ route('admin.clients.index')}}">
								<i class="glyphicon glyphicon-book"></i>
								<span>Agenda</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.clients.index')}}"><i class="fa fa-circle-o text-aqua"></i> Buscar </a></li>
								<li><a href="{{ route('admin.clients.create')}}"><i class="fa fa-circle-o text-aqua"></i> Crear </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span>Mensajes</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
							</ul>
						</li>

						<li class="treeview">
							<a href="#">
								<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
								<span>Calendario</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="{{ route('admin.articles.index')}}"><i class="fa fa-circle-o text-aqua"></i> Search Products</a></li>
								<li><a href="{{ route('admin.articles.create')}}"><i class="fa fa-circle-o text-aqua"></i> Create products</a></li>
								<li><a href="{{ route('admin.categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categories</a></li>
								<li><a href="{{ route('admin.tags.index')}}"><i class="fa fa-circle-o text-aqua"></i> Tags </a></li>
							</ul>
						</li>

						<li class="header">USUARIOS</li>
						<li><a ><i class="fa fa-users "></i> <span>Users</span></a></li>
						<li><a ><i class="fa fa-file-text "></i> <span>Manual & Documentos</span></a></li>
					@endif
					<!-- end lvl Empleado -->

					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
