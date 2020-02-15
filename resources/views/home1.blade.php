@extends('layouts.app1') 
@section('content') 

<!--================Home Banner Area =================-->

    <!-- Slideshow container -->
    <div class="slideshow-container-fluid" ">

        <!-- Full-width images with number and caption text -->
             <div class="mySlides fade">
              <div class="numbertext">1 / 5</div>
               <img src="{{asset ('app-assets/img/banner/banner-bg.jpg')}}" style="width:100%;">
                <div class="text"> همیشه خوش استایل </div>
                   </div>

                    <div class="mySlides fade">
                   <div class="numbertext">2 / 5</div>
                   <img src="{{asset ('app-assets/img/banner/banner-bg1.jpg')}}" style="width:100%">
                   <div class="text">همیشه به روز</div>
                 </div>

                 <div class="mySlides fade">
                   <div class="numbertext">3 / 5</div>
                   <img src="{{asset ('app-assets/img/banner/banner-bg2.jpg')}}" style="width:100%">
                   <div class="text">بهترین کیفیت</div>
                 </div>
                 <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="{{asset ('app-assets/img/banner/banner-bg3.jpg')}}" style="width:100%">
                    <div class="text">بهترین قیمت</div>
                  </div>
                  <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="{{asset ('app-assets/img/banner/banner-bg4.jpg')}}" style="width:100%">
                    <div class="text">کاملترین کالکشن</div>
                  </div>
                 <!-- Next and previous buttons -->
                 {{-- <a class="prev" onclick="plusSlides(-1)" style="padding-right:900px;margin-bottom:30px">&#10094;</a>
                 <a class="next" onclick="plusSlides(1)">&#10095;</a> --}}
               </div>
               <br>

               <!-- The dots/circles -->
               {{-- <div style="text-align:center">
                 <span class="dot" onclick="currentSlide(1)"></span>
                 <span class="dot" onclick="currentSlide(2)"></span>
                 <span class="dot" onclick="currentSlide(3)"></span>
               </div> --}}




               {{-- <section class="home_banner_area">
    <div class="overlay"></div>
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="offset-lg-2 col-lg-8">


                    
                    <h3>همیشه خوش استایل
                        <br />همیشه به روز</h3>
                    <p></p>
                    <a class="white_bg_btn" href="#">مشاهده کالکشن</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================End Home Banner Area =================-->

<!--================Hot Deals Area =================-->
<section class="hot_deals_area section_gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="{{asset('app-assets/img/product/hot_deals/deal1.jpg')}}" alt="">
                    <div class="content">
                        <h2>پرطرفدارهای این هفته</h2>
                        <p>همین حالا خرید کن!</p>
                    </div>
                    <a class="hot_deal_link" href="#"></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="{{asset('app-assets/img/product/hot_deals/deal2.jpg')}}" alt="">
                    <div class="content">
                        <h2>پرطرفدارهای این ماه</h2>
                        <p>همین حالا خرید کن!</p>
                    </div>
                    <a class="hot_deal_link" href="#"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Hot Deals Area =================-->


<!--================Feature Product Area =================-->
<section class="feature_product_area section_gap">
    <div class="main_box">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">
                    <h2>محصولات خاص</h2>
                </div>
            </div>
                		{{-- .Replace("1", "۱")
					.Replace("2", "۲")
					.Replace("3", "۳")
					.Replace("4", "۴")
					.Replace("5", "۵")
					.Replace("6", "۶")
					.Replace("7", "۷")
					.Replace("8", "۸")
                    .Replace("9", "۹"); 
                    ۰ --}}
            <div class="row">
                @foreach($all as $product)
                <div class="col col1">
                    <div class="f_p_item">
                        <div class="f_p_img">
                            <img class="img-fluid" src="app-assets/img/product/feature-product/{{$product->imagename}}" alt="">
                            <div class="p_icon">
                                <a href="#">
                                    <i class="lnr lnr-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                        </div>
                        <a href="#">
                            <h4>{{$product->kala->name}}</h4>
                        </a>
                        <h5>  {{$product->kala->price}}   </h5>
                    </div>
                </div>
                @endforeach
                
              
         
               
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
                        
                            <a class="page-link" href="#">۱</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">۲</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">۳</a>
                        </li>
                        <li class="page-item blank">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">۹</a>
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
    </div>
</section>
<!--================End Feature Product Area =================-->

<!--================ Subscription Area ================-->
<section class="subscription-area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>برای دریافت خبرنامه عضو شوید</h2>
                   
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div id="mc_embed_signup">
                    <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
                     method="get" class="subscription relative">
                        <input type="email" name="EMAIL" placeholder="ایمیل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                         required="">
                        <!-- <div style="position: absolute; left: -5000px;">
                            <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                        </div> -->
                        <button type="submit" class="newsl-btn">همین حالا عضو شوید!</button>
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Subscription Area ================-->
@endsection 