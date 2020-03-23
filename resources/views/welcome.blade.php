@extends('admin.templates.web')

@section('title', 'WBdesign')

@section('content' )

        <!--
        Home Slider
        ==================================== -->

		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox"> 

					<!-- single slide -->
					<div class="item active" style="background-image: url({{ asset('Web/img/banner.jpg')}});">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">WBplataform</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/administra</span> tú empresa desde internet.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">En cualquier lugar, desde cualquier dispositivo y sin costos extra</p>

							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->

					<!-- single slide -->
					<div class="item" style="background-image: url({{ asset('Web/img/banner.jpg')}});">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">WBdesign</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/desarrollo</span> web adaptado a moviles.</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">Las mejores paginas web completamente <span class="color">ADMINISTRABLES</span></p>

							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->

				</div>
				<!-- End Wrapper for slides -->

			</div>
		</section>

        <!--
        End Home SliderEnd
        ==================================== -->

                <!--
        Home
        ==================================== -->

		<section id="home" class="home">
			<div class="container">
				<div class="">

					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Bienvenido</h2>
						<div class="devider"><i class="fa fa-anchor fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-github fa-2x"></i>
							</div>
							<div class="service-desc">
								@foreach($contents as $content)
									@if($content->id == 1)
								<h3>{!!$content->title!!}</h3>
								{!!$content->content!!}
									@endif
								@endforeach
							</div>
						</div>
					</div>
					<!-- end service item -->

					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							<div class="service-desc">
								@foreach($contents as $content)
									@if($content->id == 2)
								<h3>{!!$content->title!!}</h3>
								{!!$content->content!!}
									@endif
								@endforeach
							</div>
						</div>
					</div>
					<!-- end service item -->

					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							<div class="service-desc">
								@foreach($contents as $content)
									@if($content->id == 3)
								<h3>{!!$content->title!!}</h3>
								{!!$content->content!!}
									@endif
								@endforeach
							</div>
						</div>
					</div>
					<!-- end service item -->

				</div>
			</div>
		</section>
        <!--
        End Home
        ==================================== -->


        <!--
        Plataforma
        ==================================== -->

		<section id="features" class="features">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						@foreach($contents as $content)
							@if($content->id == 7)
						<h2>{!!$content->title!!}</h2>
							@endif
						@endforeach
						<div class="devider"><i class="fa fa-paw fa-lg"></i></div>
					</div>
					<div class="sec-sub-title text-center">
						@foreach($contents as $content)
							@if($content->id == 7)
						<p>{!!$content->content!!}</p>
							@endif
						@endforeach
					</div>

					<section >
		                <div class="container">

		                    <div class="row">

									@foreach($galeries as $galery)

		                            <figure class=" figure wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
		                                <div class="img-wrapper">
		                                    <img id="galeria" src="/Imagenes/Galerias/Thumbs/{{ $galery->thumb }}" class="img-responsive" alt="this is a title" >
		                                    <div class="overlaygalery">
		                                        <div class="buttons">
		                                        	<a rel="gallery" class="fancybox" href="/Imagenes/Galerias/{{ $galery->name }}">Ver</a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </figure>

		                            @endforeach


		                    </div>
		                </div>
		            </section> <!-- #works -->

				</div>
			</div>
			<br>
			<hr>

											                <!--
	        Demo Plataforma
	        ==================================== -->
				<div class="container">
					<div class="row mb50 wow bounceInDown animated" data-wow-duration="500ms">

						<div class="sec-title text-center" >
							<h2>Demo</h2>
							<div class="devider"><i class="fa fa-gamepad fa-lg"></i></div>
						</div>
						<br>

						<!-- service item -->
						<div class="col-md-4">

						</div>
						<!-- end service item -->
						<!-- service item -->
						<div class="col-md-4">
							<div class="col-md-12 no-float center-block">
								<div class="text-center">
									<a href="{{ route('demo')}}"><button type="button" class="btn btn-info btn-block"> WBplataform Demo></button></a
								</div>
							</div>
						</div>
						<!-- end service item -->
						<!-- service item -->
						<div class="col-md-4">

						</div>
						<!-- end service item -->
					</div>
				</div>
				      <!--
	        End Demo Plataform
	        ==================================== -->

		</section>


        <!--
        End plataform
        ==================================== -->


        <!--
        Our Works
        ==================================== -->

		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center">
						@foreach($contents as $content)
							@if($content->id == 4)
						<h2>{!!$content->title!!}</h2>
							@endif
						@endforeach
						<div class="devider"><i class="fa fa-briefcase fa-lg"></i></div>
					</div>

					<div class="sec-sub-title text-center">
						@foreach($contents as $content)
							@if($content->id == 4)
						<p>{!!$content->content!!}</p>
							@endif
						@endforeach
					</div>

					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">Todos</a></li>
							<li><a href="javascript:;" data-filter=".clientes" class="filter">Clientes</a></li>
							<li><a href="javascript:;" data-filter=".demos" class="filter">Demos</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="project-wrapper">

				@foreach($images as $image)

					@if($image->article->category->name == 'Clientes' )
					<figure class="mix work-item clientes">
						<img src="/Imagenes/Productos/Thumbs/{{ $image->thumb }}" alt="">
						<figcaption class="overlay">
							<a class="fancybox" rel="works" title="{!!$image->article->title!!}" href="Imagenes/Productos/{{ $image->name }}"><i class="fa fa-eye fa-lg"></i></a>
							<h4>{!!$image->article->title!!}</h4>
							{!!$image->article->content!!}
						</figcaption>
					</figure>
					@endif

					@if($image->article->category->name == 'Demos' )
					<figure class="mix work-item demos">
						<img src="/Imagenes/Productos/Thumbs/{{ $image->thumb }}" alt="">
						<figcaption class="overlay">
							<a class="fancybox" rel="works" title="{!!$image->article->title!!}" href="/Imagenes/Productos/{{ $image->name }}"><i class="fa fa-eye fa-lg"></i></a>
							<h4>{!!$image->article->title!!}</h4>
							{!!$image->article->content!!}
						</figcaption>
					</figure>
					@endif

				@endforeach

			</div>


		</section>

        <!--
        End Our Works
        ==================================== -->

		<!--
        Some fun facts
        ==================================== -->

		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">

						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Algunos Datos Curiosos</h2>
							<div class="devider"><i class="fa fa-bell-o fa-lg"></i></div>
						</div>

						<!-- first count item -->
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="5040">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Horas de trabajo</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="11">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Clientes satisfechos</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="12">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p> Projectos Desarrollados </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="2">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Premios ganados</p>
							</div>
						</div>
						<!-- end first count item -->

					</div>
				</div>
			</div>
		</section>

        <!--
        End Some fun facts
        ==================================== -->

        <!--
        Meet Our Team
        ==================================== -->

		<section id="team" class="team">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						@foreach($contents as $content)
							@if($content->id == 5)
						<h2>{!!$content->title!!}</h2>
							@endif
						@endforeach
						<div class="devider"><i class="fa fa-user-md fa-lg"></i></div>
					</div>

					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						@foreach($contents as $content)
							@if($content->id == 5)
						<p>{!!$content->content!!}</p>
							@endif
						@endforeach
					</div>

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="{{ asset('/Imagenes/CEO/Ingeniero.jpg')}}" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Ingeniero Electricista</h5>
								<p>Amante por la programacion y energias renovavles.</p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/garzon_"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://plus.google.com/u/0/106986627398795538745"><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Ing. Cesar Garzón Puentes</h4>
						<span>CEO Developer</span>
					</figure>
					<!-- end single member -->
										<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="{{ asset('/Imagenes/CEO/Contadora.jpg')}}" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Contador Publico</h5>
								<p>Amante por la administración y finanzas.</p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/garzon_"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://plus.google.com/u/0/106986627398795538745"><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Leidy Caviedes Carreño</h4>
						<span>CEO</span>
					</figure>
					<!-- end single member -->
				</div>
			</div>
		</section>

        <!--
        End Meet Our Team
        ==================================== -->




		<!--
        Contact Us
        ==================================== -->

		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">

					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						@foreach($contents as $content)
							@if($content->id == 6)
						<h2>{!!$content->title!!}</h2>
							@endif
						@endforeach
						<div class="devider"><i class="fa fa-envelope fa-lg"></i></div>
					</div>

					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						@foreach($contents as $content)
							@if($content->id == 6)
						<p>{!!$content->content!!}</p>
							@endif
						@endforeach
					</div>

					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>Contactanos personalmente!</h3>
							<p>TRV. 63 # 68 B 90 SUR - MNZ 3 - CASA 12</p>
							<p>EL ENSUEÑO, BOGOTÁ D.C.</p>
							<p>TEL NO : 3186132665</p>
						</div>
					</div>
					<!-- end contact address -->

					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>Di Hola!</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Mensaje" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="Send message">
								</div>
							</form>
						</div>
					</div>
					<!-- end contact form -->

					<!-- footer social links -->
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
							<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
					<!-- end footer social links -->

				</div>
			</div>

			<!-- Google map -->
			<iframe id="map_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.2675112249749!2d-74.15939708657422!3d4.581445191136282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f1b2b1cf651%3A0x298b6c42094a97ef!2sTv.+63+%2368b+Sur-2%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1461077246237" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			<!-- End Google map -->

		</section>

        <!--
        End Contact Us
        ==================================== -->

@endsection
