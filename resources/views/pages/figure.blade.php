<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/styles/bootstrap4/bootstrap.min.css">
<link href="{{ asset('bower_components/demo_template/onetech') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo_template/onetech') }}/styles/responsive.css">
<link rel="canonical" href="https://lacdau.com/lot-chuot" >
<link rel="shortcut icon" href="/static/assets/default/images/favicon.png" type="image/x-icon" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<div id="js-fontawesome-lib"></div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />    
<link rel="stylesheet" href="https://lacdau.com/static/assets/default/script/library.css">
<link rel="stylesheet" href="https://lacdau.com/static/assets/default/script/pc_style.css?27.07.2022.61">
</head>
@extends('layouts.app')
<body>
@section('content')
@auth()
<div class="col-right">
        

        <div class="page-title-group">
            <h1 class="page-title">{{ __('FIGURE') }}</h1>
            <span>(861 sản phẩm)</span>
            <hr class="my-3">
        </div>

        
        <div class="cat-list-group">
            <div class="owl-carousel owl-theme custom-nav" id="js-slider-cat">
                
                <a href="/lot-chuot-co-80x30" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_18_1657020356.jpg" alt="LÓT CHUỘT CỠ 80X30" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT CỠ 80X30</h2>
                </a>                
                
                <a href="/lot-chuot-co-90x30" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_19_1658826733.JPG" alt="LÓT CHUỘT CỠ 90X40" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT CỠ 90X40</h2>
                </a>                
                
                <a href="/lot-chuot-co-80x40" class="item">
                    <span class="cat-img">
                        <img data-src="/static/assets/default/images/logo.png" alt="LÓT CHUỘT CỠ 80X40" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT CỠ 80X40</h2>
                </a>                
                
                <a href="/lot-chuot-co-45x40" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_20_1658826788.jpg" alt="LÓT CHUỘT CỠ 45X40" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT CỠ 45X40</h2>
                </a>                
                
                <a href="/lot-chuot-co-35x30" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_21_1658826839.jpg" alt="LÓT CHUỘT CỠ 35X30" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT CỠ 35X30</h2>
                </a>                
                
                <a href="/lot-chuot-co-26x21" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_22_1658826932.JPG" alt="LÓT CHUỘT CỠ 26X21" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT CỠ 26X21</h2>
                </a>                
                
                <a href="/lot-chuot-led" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_23_1658827100.jpg" alt="LÓT CHUỘT LED" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT LED</h2>
                </a>                
                
                <a href="/lot-chuot-silicon-3d" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_24_1658827226.jpg" alt="LÓT CHUỘT SILICON 3D" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT SILICON 3D</h2>
                </a>                
                
                <a href="/lot-chuot-da" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_25_1658827282.jpg" alt="LÓT CHUỘT DA" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT DA</h2>
                </a>                
                
                <a href="/lot-chuot-in-theo-yeu-cau" class="item">
                    <span class="cat-img">
                        <img data-src="/media/category/cat_big_26_1658826377.png" alt="LÓT CHUỘT IN THEO YÊU CẦU" class="owl-lazy" width="100" height="100" />
                    </span>
                    <h2 class="inherit">LÓT CHUỘT IN THEO YÊU CẦU</h2>
                </a>                
                
            </div>
        </div>
        

        <div class="product-holder-group">
            <div class="sort-by-group">
                <div class="sort-by-list">
                    
                    
                    <a href="https://lacdau.com/lot-chuot?sort=new" >                        
                        Hàng mới
                                                
                    </a>
                    
                    
                    
                    <a href="https://lacdau.com/lot-chuot?sort=price-asc" >                        
                         Giá tăng dần
                                                
                    </a>
                    
                    
                    
                    <a href="https://lacdau.com/lot-chuot?sort=price-desc" >                        
                         Giá giảm dần
                                                
                    </a>
                    
                    
                    
                    <a href="https://lacdau.com/lot-chuot?sort=view" >                        
                        Xem nhiều
                                                
                    </a>
                    
                    
                    
                    
                    
                    
                    
                    
                </div>

                <div class="d-flex align-items-center justify-content-end">
                    <div class="choose-price-holder">
                        <input type="text" placeholder="Giá thấp nhất" value="" onkeyup="this.value = writeStringToPrice(this.value)" class="price-range" id="js-min-range">
                        - 
                        <input type="text" placeholder="Giá cao nhất" value="" onkeyup="this.value = writeStringToPrice(this.value)" class="price-range" id="js-max-range">

                        <a href="javascript:void(0)" class="submit-filter" id="js-submit-filter" style="display: inline-block;">Tìm</a>

                        <span style="width: 100%; margin-top: 10px; color: rgb(255, 0, 0); font-weight: 600;" id="js-filter-note"></span>
                    </div>

                    <select class="sort-select-item" onchange="window.location = this.value">
                        <option value="/lot-chuot">Lọc sản phẩm</option>

                        
                        <option value="https://lacdau.com/lot-chuot?other_filter=in-stock" >Còn hàng</option>
                        

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <option value="https://lacdau.com/lot-chuot?sort=comment" >Trao đổi</option>
                        
                        
                        
                        <option value="https://lacdau.com/lot-chuot?sort=rating" >Đánh giá</option>
                        
                        
                        
                        <option value="https://lacdau.com/lot-chuot?sort=name" >Tên A->Z</option>
                        
                                                
                    </select>

                    <div class="display-group">
                        <a href="javascript:void(0)" class="icons icon-grid " onclick="Hura.User.setOption('product_display', 'grid').then(function(){ window.location.reload();})"></a>
                        
                        <a href="javascript:void(0)" class="icons icon-list " onclick="Hura.User.setOption('product_display', 'list').then(function(){ window.location.reload();})"></a>
                    </div>
                </div>
            </div>

            <div class="p-container ">
                
                <div class="p-item">
    <a href="/pad-22-sleep-bear" class="p-img">
        <img src="/static/assets/default/images/logo.png" data-src="/media/product/250-795-c2c546d63059e8b752992bb9a31cd7b2.jpg" alt="PAD 22 SLEEP BEAR" width="250" height="250" class="lazy" />
        
    </a>

    <div class="p-text">
       <div class="d-flex align-item-center justify-content-between">
        <p class="p-sku">Mã: PAD0476</p>
        <p class="p-qty conhang">Còn hàng </p> 
      </div>
        <a href="/pad-22-sleep-bear" class="p-name"> <h3>PAD 22 SLEEP BEAR</h3> </a>

        <div class="p-price-container">
            
            <span class="p-price">
                35.000<u>đ</u>
                
            </span>

            <a href="javascript:void(0)" class="p-btn-cart" onclick="addProductToCart(795, 0, '')"></a>
        </div>
    </div>
</div>
                
  
                
            </div>

            
            <div class="paging">
                
                
                <a href="/lot-chuot" class="current"> 1 </a>
                
                
                
                <a href="/lot-chuot?page=2" > 2 </a>
                
                
                
                <a href="/lot-chuot?page=3" > 3 </a>
                
                
                
                <a href="/lot-chuot?page=4" > 4 </a>
                
                
                
                <a href="/lot-chuot?page=5" > 5 </a>
                
                
                
                <a href="/lot-chuot?page=6" > 6 </a>
                
                
                
                <a href="/lot-chuot?page=7" > 7 </a>
                
                
                
                
            </div>
            
        
            
            <div class="static-html-group js-static-container">
                <div class="js-static-content"><p>Lót chuột Lắc Đầu giá tốt nhất thị trường.....</p></div>
    
                <div class="btn-html-content">
                    <a href="javascript:void(0)" class="js-showmore-button">Xem thêm <i class="fas fa-chevron-right"></i></a>
                    <a href="javascript:void(0)" class="js-showless-button">Thu gọn <i class="fas fa-chevron-up"></i></a>
                </div>
            </div>
            
        </div>        
    </div>
@endauth



<script src="{{ asset('bower_components/demo_template/onetech') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/styles/bootstrap4/popper.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/slick-1.8.0/slick.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/easing/easing.js"></script>
<script src="{{ asset('bower_components/demo_template/onetech') }}/js/custom.js"></script>
@endsection
</body>