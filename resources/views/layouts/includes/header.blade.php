<!doctype html>
<html lang="fa">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset ('app-assets/css/img/favicon.png')}}" type="image/png">
	<title>های هیلز</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('app-assets/css/bootstrap.css')}} ">
    <link rel="stylesheet" href="{{asset ('app-assets/css/bootstrap-v4-rtl-master/bootstrap-rtl.css')}} ">
	<link rel="stylesheet" href="{{asset ('app-assets/css/vendors/linericon/style.css' )}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/css/font-awesome.min.css' )}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/vendors/owl-carousel/owl.carousel.min.css' )}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/vendors/lightbox/simpleLightbox.css' )}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/vendors/nice-select/css/nice-select.css' )}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/vendors/animate-css/animate.css' )}}">
	<link rel="stylesheet" href="{{asset ('app-assets/css/vendors/jquery-ui/jquery-ui.css ')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset ('app-assets/css/style.css' )}}">
    <link rel="stylesheet" href="{{asset ('app-assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
		
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
		
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
		
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
		
	</script>
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>تماس با ما: ۰۹۱۲۱۲۳۴۵۶۷</p>
					
					{{-- .Replace("1", "۱")
					.Replace("2", "۲")
					.Replace("3", "۳")
					.Replace("4", "۴")
					.Replace("5", "۵")
					.Replace("6", "۶")
					.Replace("7", "۷")
					.Replace("8", "۸")
					.Replace("9", "۹"); --}}
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<a href="{{route('home1')}}">
								ورود/ثبت نام
							</a>
						</li>
						<li>
						<a href="{{route('home1')}}">
								پروفایل من
							</a>
						</li>
						<li>
							<a href="{{route('contact')}}">
								تماس با ما
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="{{route('home1')}}">
                        <img src="{{asset ('app-assets/img/logo.png')}}" alt="">
                        {{-- <i class="fa fa-gratipay" aria-hidden="true"></i> --}}
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav center_nav pull-right" >
									<li class="nav-item active">
										<a class="nav-link" href="{{route('home1')}}">خانه</a>
									</li>
									<li class="nav-item submenu dropdown" >
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false">فروشگاه</a>
										<ul class="dropdown-menu">
											<li class="nav-item " >
												<a class="nav-link" href="{{route('category')}}">دسته بندی محصولات</a>
												<li class="nav-item">
												<a class="nav-link" href="{{route('singleproduct')}}">جزئیات محصول</a>
													<li class="nav-item">
														<a class="nav-link" href="{{route('productcheckout')}}">بررسی نهایی محصول</a>
														<li class="nav-item">
															<a class="nav-link" href="{{route('cart')}}">سبد خرید</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="{{route('faktor')}}">تایید خرید</a>
														</li>
										</ul>
									</li>
						
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">سفارشات</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="{{route('login')}}">ورود</a>
												<li class="nav-item">
													<a class="nav-link" href="{{route('tracking')}}">پیگیری سفارش</a>
													
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{route('contact')}}" style="margin-right:30px;">ارتباط با ما</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>

										</a>
									</li>

									<hr>

									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart" aria-hidden="true"></i>

										</a>
									</li>

									<hr>

									<li class="nav-item">
									<a href="{{route('cart')}}" class="icons">
											<i class="fa fa-shopping-basket" aria-hidden="true"></i>										</a>
									</li>

									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
