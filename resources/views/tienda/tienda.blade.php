<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->
	 
	 <meta charset="utf-8">
	 
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	 <link rel="icon" type="image/png" href="{{URL::asset('templete/images/favicon.png')}}">
	
     <title>Fajar</title>
    
     <meta name="description" content="">
    
     <meta name="keywords" content="">
    
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
    
     ================================================== -->
    
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    
     <meta name="format-detection" content="telephone=no">
	 
	 
    <!-- CSS
    
     ================================================== -->
	
	
	<!-- website styling -->
	<link rel="stylesheet" href="{{URL::asset('templete/css/style.cs')}}s">
	
	<!-- Revolution slider styling -->
	<link rel="stylesheet" href="{{URL::asset('templete/css/settings.css')}}">

	<!-- bootstrap -->
	<link rel="stylesheet" href="{{URL::asset('templete/css/bootstrap.css')}}">	
	
	 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- SCRIPTS
    
     ================================================== -->
	
	<script src="{{URL::asset('templete/js/modernizr-2.6.2.min.js')}}"></script>
	
	<!-- jQuery (necessary for JavaScript plugins) 
	============================================= -->
	<script src="{{URL::asset('templete/js/jquery.min.js')}}"></script>
	
	<script src="{{URL::asset('templete/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{URL::asset('templete/js/jquery.themepunch.revolution.min.js')}}"></script>
	
	</head>
    <body>
		
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			
			<!-- Header
			============================================= -->
			@include('tienda.header')
			
			
			
			<!-- Slider
			============================================= -->
			<section id="slider" class="no-padding main-banner">
				
				<div class="tp-banner-container">
					<div class="tp-banner">
						<ul>
							
							<li data-transition="fade" data-slotamount="1" data-masterspeed="1500">
								<!-- MAIN IMAGE -->
								<img src="{{URL::asset('http://www.rodicar.es/v_portal/inc/imagen.asp?f=slider551.jpg&w=1900&h=663&c=2')}}"  alt=""  data-bgfit="" data-bgposition="left top" data-bgrepeat="no-repeat">
								
								<!-- LAYER NR. 1 -->
								<div class="tp-caption slide1-heading lfb skewtoleft"
									data-x="center"
									data-y="190"
									data-speed="2000"
									data-start="500"
									data-easing="Power4.easeOut"
									data-endspeed="400"
									data-endeasing="Power1.easeIn"
									style="z-index: 11">Joyeria Diamante Rojo
								</div>
								
								<!-- LAYER NR. 2 -->
								<div class="tp-caption slide1-text lfb skewtoleft"
									data-x="center"
									data-y="280"
									data-speed="2000"
									data-start="900"
									data-easing="Power4.easeOut"
									data-endspeed="400"
									data-endeasing="Power1.easeIn"
									style="z-index: 11">EMPRESA TOTALMENTE MEXICANA
								</div>
								
								<!-- LAYER NR. 3 -->
								<div class="tp-caption slide1-btn lfb skewtoleft"
									data-x="center"
									data-y="340"
									data-speed="2000"
									data-start="1300"
									data-easing="Power4.easeOut"
									data-endspeed="400"
									data-endeasing="Power1.easeIn"
									style="z-index: 11"><a href="products.html" class="btn btn-bordered">COMPRAR AHORA</a>
								</div>
							</li>
							
							<li data-transition="slide" data-slotamount="2" data-masterspeed="1500">
								<!-- MAIN IMAGE -->
								<img src="{{URL::asset('http://www.rodicar.es/v_portal/inc/imagen.asp?f=slider551.jpg&w=1900&h=663&c=2')}}"  alt=""  data-bgfit="" data-bgposition="left top" data-bgrepeat="no-repeat">

								<!-- LAYER NR. 1 -->
								<div class="tp-caption slide2-date skewfromleftshort customout"
									data-x="80"
									data-y="130"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="300"
									data-start="1600"
									data-easing="Back.easeOut"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									data-captionhidden="on"
									style="z-index: 7;">2017
								</div>
								
								<!-- LAYER NR. 2 -->
								<div class="tp-caption slide2-heading customin customout"
									data-x="80"
									data-y="300"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="600"
									data-start="1400"
									data-easing="Power3.easeInOut"
									data-splitin="chars"
									data-splitout="chars"
									data-elementdelay="0.08"
									data-endelementdelay="0.08"
									style="z-index: 11">Joyeria Diamante Rojo
								</div>
								
								<!-- LAYER NR. 3 -->
								<div class="tp-caption slide2-sprtr customin customout"
									data-x="130"
									data-y="370"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="600"
									data-start="1400"
									data-easing="Power2.easeInOut"
									data-splitin="chars"
									data-splitout="chars"
									data-elementdelay="0.08"
									data-endelementdelay="0.08"
									style="z-index: 11">--------------------------------
								</div>
								
								<!-- LAYER NR. 4 -->
								<div class="tp-caption slide2-text customin customout"
									data-x="80"
									data-y="410"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="600"
									data-start="1400"
									data-easing="Power3.easeInOut"
									data-splitin="chars"
									data-splitout="chars"
									data-elementdelay="0.08"
									data-endelementdelay="0.08"
									style="z-index: 11">TODO POR USTEDES
								</div>
								
							</li>
						</ul>
					</div>
				</div>
				
			</section>
			
			
			<div class="container">
			
				<!-- Categories
				============================================= -->
				
				<!-- Featured Products
				============================================= -->
				<section id="featured-products" class="no-padding relative" style="margin-top:25px;">
					
					<h2>Featured Products</h2>
					
					<div class="featured-products-filter-nav">
						<div class="filter active" data-filter=".today">Today</div>
						<div class="filter" data-filter=".weekly">Weekly</div>
						<div class="filter" data-filter=".monthly">Monthly</div>
					</div>
					
					<div id="Container-featured-products" class="container">
						<ul class="product-column portfolio-four-column clearfix">
							@foreach($productos as $pro)
								<li class="mix today">
									<div class="product">
										<a href="products.html"><img src="{{URL::asset('templete/images/featured-products/today/1.jpg')}}" alt=""></a>
										<h4>{{$pro->pro_nombre}}</h4>
										<p>{{$pro->pro_desc}}</p>
										<p class="price">${{$pro->pro_costo}}</p>
									</div>
								</li>
							@endforeach

							@foreach($productos as $pro)
								<li class="mix weekly">
									<div class="product">
										<a href="products.html"><img src="{{URL::asset('templete/images/featured-products/today/1.jpg')}}" alt=""></a>
										<h4>{{$pro->pro_nombre}}</h4>
										<p>{{$pro->pro_desc}}</p>
										<p class="price">${{$pro->pro_costo}}</p>
									</div>
								</li>
							@endforeach

							@foreach($productos as $pro)
								<li class="mix monthly">
									<div class="product">
										<a href="products.html"><img src="{{URL::asset('templete/images/featured-products/today/1.jpg')}}" alt=""></a>
										<h4>{{$pro->pro_nombre}}</h4>
										<p>{{$pro->pro_desc}}</p>
										<p class="price">${{$pro->pro_costo}}</p>
									</div>
								</li>
							@endforeach
						</ul>
					</div>
					
					
				</section>
				
								
				
				<!-- New Products
				============================================= -->
				<section id="new-products" class="no-padding-bottom">
					
					<h2>New Products</h2>
					<br>
					
					<div class="three-item-carousel arrows owl-carousel">

						@forelse($newProductos as $prod)
							<div class="product">
								<a href="#."><img src="{{URL::asset('templete/images/new-products/1.jpg')}}" alt=""></a>
								<h4>{{$prod->pro_nombre}}</h4>
								<p>{{$pro->pro_desc}}</p>
								<p class="price">${{$prod->pro_costo}}</p>
							</div>
						@empty
							<center><h1>Sin productos</h1></center>
						@endforelse
					
					</div>
					
				</section>
				
				<!-- Add Section
				============================================= -->
						
				
				<!-- Latest Blog
				============================================= -->
				
				
				<!-- Banners
				============================================= -->
				<div class="row">
					<div class="col-md-6">
						<div class="available-widget">
							<i class="icon-icons20"></i>
							<p>We are Now Available<span>Monday to Saturday from 7am till 11pm</span></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="place-order-widget">
							<i class="icon-icons202"></i>
							<p>Place your Order <span>By C
								ing</span><b class="tag">(001) 111 222 333</b></p>
						</div>
					</div>
				</div>
				
				
			
			</div>
			
			<div class="height50"></div>
			
			
			<!-- Footer
			============================================= -->
			@include("tienda.footer")
			
			
		</div>
	
	
	
	
	<!-- bootstrap 
	============================================= -->
	<script src="{{URL::asset('templete/js/bootstrap.min.js')}}"></script>

	<!-- External plugins
	============================================= -->
	<script src="{{URL::asset('templete/js/plugins.js')}}"></script>
	
	<!-- scripts 
	============================================= -->
	<script src="{{URL::asset('templete/js/scripts.js')}}"></script>

	
	<script>

	(function () {
		"use strict";
			
			
			/* ------------------------------------------------------------------------ 
			   MAIN BANNER [revolution slider]
			------------------------------------------------------------------------ */
			var revapi;
			
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1300,
				startheight:663,
				hideThumbs:10

			});
			
			
	})(jQuery);
	
	
	</script>
	
	
	</body>
</html>
	