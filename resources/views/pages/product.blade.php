@include('template.ecommerce.header')  

    <style>
        @media only screen and  (max-width: 426px) {
        .bottom-bar {
background: #1baf68;
margin-bottom:unset;
padding:unset;
padding-bottom: 100px;
}}
        </style>    
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row" style="background: #f1f1f5; ">
                    <div class="col-md-3 header-img-mobile">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{asset('public/ecommerce/img/banner/war.jpg')}}" />
                                <a class="img-text" >
                                    <p>Nga Thinkpad xin chào</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="{{asset('public/ecommerce/img/banner/lfp.jpg')}}" />
                                <a class="img-text" >
                                    <p>Theo dõi qua FB để cập nhật khuyến mãi</p>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <style>
                        video {
                            object-fit: fill;
width: 645px;
height: 400px;
display: flex;
}
                    </style>
                    <div class="col-md-6 slider-mobile">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new1.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new2.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new5.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new4.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new3.jpg')}}" alt="Slider Image" />
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category-desktop">
                        <nav class="navbar bg-light">
                            @include('template.ecommerce.category')
                        </nav>
                    </div>

                   
                    
                </div>
            </div>
        </div>
        {{-- category-mobile --}}
<div class="block_icon_category width_common" id="new_box_icon_category">
    <div class="width_common scroll_horizon">
        <div class="content_scroll_horizon">
            <a href="">
            <div class="new_width_icon_category">
                <div class="item_category_top">
                    <a href="{{URL::to('/tra-cuu-don-hang')}}" >
                        <span class="icon_lam_category_top">
                            <img src="https://media.hasaki.vn/hsk/icon/menu-category.png"></span>
                            <div class="title_cate_home">Tất cả</div></a><a href="{{URL::to('/tra-cuu-don-hang')}}"  >
                            <span class="icon_lam_category_top"><img src="{{asset('public/ecommerce/img/category-mobile/track-order-70.png')}}"></span>
                            <div class="title_cate_home">Tra cứu đơn hàng</div>
                    </a>
                </div>
                <div class="item_category_top">
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');">
                        <span class="icon_lam_category_top">
                            <img src="{{asset('public/ecommerce/img/category-mobile/menu-booking.png')}}">
                        </span><div class="title_cate_home">Đặt hẹn</div>
                    </a>
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');">
                        <span class="icon_lam_category_top">
                            <img src="{{asset('public/ecommerce/img/category-mobile/icon-covid.png')}}">
                        </span><div class="title_cate_home">Covid</div>
                    </a>
                </div>
                <div class="item_category_top">
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                        <img src="{{asset('public/ecommerce/img/category-mobile/now-free-mobile.gif')}}"></span>
                        <div class="title_cate_home">Giao 2H</div>
                    </a>
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');">
                        <span class="icon_lam_category_top"><img src="{{asset('public/ecommerce/img/category-mobile/menu-bestseller.png')}}"></span>
                        <div class="title_cate_home">Bán chạy</div>
                    </a></div>
                    <div class="item_category_top">
                        <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top"><img src="{{asset('public/ecommerce/img/category-mobile/menu-spa.png')}}"></span>
                            <div class="title_cate_home">Clinic &amp; S.P.A</div></a>
                            <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                                <img src="{{asset('public/ecommerce/img/category-mobile/menu-deals.png')}}"></span>
                                <div class="title_cate_home">Deals</div></a></div><div class="item_category_top">
                                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                                        <img src="{{asset('public/ecommerce/img/category-mobile/menu-spa-services.png')}}"></span>
                                        <div class="title_cate_home">Bảng giá</div></a>
                                        <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                                            <img src="{{asset('public/ecommerce/img/category-mobile/menu-blog.png')}}"></span>
                                            <div class="title_cate_home">Cẩm nang</div></a>
                                        </div>
            </div>
        </div></div>
        </div>
             {{--end category-mobile --}}
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
       {{-- @include('template.ecommerce.brand')    --}}
        <!-- Brand End -->      
        
   
        
        <!-- Category Start-->

        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="customer-h2">Nga ThinkPad</h1>
                    </div>
                    <div class="col-md-4" style="text-align: end;">
                        <a href="tel:0907799046">(+84) 779 444 222</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        
        
       
        <!-- Newsletter End -->        
        

        
        

        <!-- Review Start -->
      
        <!-- Review End -->    
        
        <!-- xa hang -->
        <?php echo Helper::renderCatalog($productSales, 'Xả hàng || Giảm giá',999);?>
        <!-- end xa hang -->

        <!-- duoi 3 trieu -->
        <?php echo Helper::renderCatalog($productBelow3tr, 'Dưới 3 triệu',16);?>
        <!-- duoi 3 trieu -->

         <!-- tu 3 den 5 trieu -->
         <?php echo Helper::renderCatalog($product3trTo5tr, 'Từ 3 đến 5 triệu',15);?>
        <!-- tu 3 den 5 trieu -->

         <!-- tu 5 den 7 trieu -->
         <?php echo Helper::renderCatalog($product5trTo7tr, 'Từ 5 đến 7 triệu',17);?>
        <!-- tu 5 den 7 trieu -->

        <!-- tu 7 den 10 trieu -->
        <?php echo Helper::renderCatalog($product7trTo10tr, 'Từ 7 đến 10 triệu',18);?>
        <!-- tu 7 den 10 trieu -->

        <!-- tren 10 trieu -->
        <?php echo Helper::renderCatalog($productOver10tr, 'Trên 10 triệu',19);?>
        <!-- tren 10 trieu -->
      
        @include('template.ecommerce.footer')