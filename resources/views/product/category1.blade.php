@extends('layouts.app1') 
@section('content') 


	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Shop Category Page</h2>
					<div class="page_link">
					<a href="{{route('home')}}">Home</a><br>
					<a href="{{route('category')}}">Category</a><br>
						<a href="{{route('category')}}">Women Fashion</a> <br>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Category Product Area =================-->
	<section class="cat_product_area section_gap">
		<div class="container-fluid">
			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					 <span class="badge badge-secondary">{{$tag->name}} </span> <br>
					<div class="latest_product_inner row">
                        
                       
                        @foreach($all as $product)
                        
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="f_p_item">
								<div class="f_p_img">
                                    <br>

                                <img  src="../app-assets/img/product/kalas/{{$product->fileimage}}"  alt="" class="img-fluid">
									<div class="p_icon">
										<a href="#">
											<i class="lnr lnr-heart"></i>
										</a>
									<a href="{{'addtoshoppingcart/'.$product->id}}">
											<i class="lnr lnr-cart"></i>
										</a>
									</div>
								</div>
								<a href="#">
									
									<h4>{{$product->name}}</h4>
								</a>
								<h5>{{$product->price}}</h5>
								
							</div>
						</div>
					@endforeach

						
						
						
					</div>
				</div>
				<div class="col-lg-3">
					<div class="left_sidebar_area">
						<aside class="left_widgets cat_widgets">
							<div class="l_w_title pr-2">
								<h3>جستجوی دسته‌بندی کالا‌ها</h3>
							</div>
							<div class="widgets_inner">
								<ul class="list">
									<li>
										<a href="#">کفش</a>
										<ul class="list">
											<li>
												<a href="#">کفش زنانه</a>
											</li>
											<li>
												<a href="#">کفش مردانه</a>
											</li>
											<li>
												<a href="#">کفش دخترانه</a>
											</li>
											<li>
												<a href="#">کفش پسرانه</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">مانتو</a>
										<ul class="list">
											<li>
												<a href="#">مانتو تابستانه</a>
											</li>
											<li>
												<a href="#">مانتو زمستانه</a>
											</li>
											<li>
												<a href="#">مانتو مجلسی</a>
											</li>
										
										</ul>
									</li>

									<li>
										<a href="#">شلوار</a>
										<ul class="list ">
											<li>
									
												
													<li>
														<a href="#">شلوار جین</a>
													</li>
													<li>
														<a href="#">شلوار کتان</a>
													</li>
											
											</li>
										
										</ul>
									</li>

									<li>
										<a href="#">کیف</a>
										<ul class="list">
											<li>
												<a href="#">Frozen Fish</a>
											</li>
											<li>
												<a href="#">Dried Fish</a>
											</li>
											<li>
												<a href="#">Fresh Fish</a>
											</li>
											<li>
												<a href="#">Meat Alternatives</a>
											</li>
											<li>
												<a href="#">Meat</a>
											</li>
										</ul>
									</li>
									
								</ul>
							</div>
						</aside>
						<aside class="left_widgets p_filter_widgets">
							<div class="l_w_title">
								<h3>Product Filters</h3>
							</div>
							<div class="widgets_inner">
								<h4>Brand</h4>
								<ul class="list">
									<li>
										<a href="#">Apple</a>
									</li>
									<li>
										<a href="#">Asus</a>
									</li>
									<li class="active">
										<a href="#">Gionee</a>
									</li>
									<li>
										<a href="#">Micromax</a>
									</li>
									<li>
										<a href="#">Samsung</a>
									</li>
								</ul>
							</div>
							<div class="widgets_inner">
								<h4>Color</h4>
								<ul class="list">
									<li>
										<a href="#">Black</a>
									</li>
									<li>
										<a href="#">Black Leather</a>
									</li>
									<li class="active">
										<a href="#">Black with red</a>
									</li>
									<li>
										<a href="#">Gold</a>
									</li>
									<li>
										<a href="#">Spacegrey</a>
									</li>
								</ul>
							</div>
							<div class="widgets_inner">
								<h4>Price</h4>
								<div class="range_item">
									<div id="slider-range"></div>
									<div class="row m0">
										<label for="amount">Price : </label>
										<input type="text" id="amount" readonly>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>

			<div class="row">
				<nav class="cat_page mx-auto" aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">01</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">02</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">03</a>
						</li>
						<li class="page-item blank">
							<a class="page-link" href="#">...</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">09</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->
	@endsection 