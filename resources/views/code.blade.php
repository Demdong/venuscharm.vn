<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <base href="https://venuscharm.vn/">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="vi">
    <link rel="alternate" href="https://venuscharm.vn/" hreflang="vi-vn">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Venus Charm">
    <meta name="copyright" content="Venus Charm">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <title>Trang chủ</title>

    <!-- các thẻ meta -->

    <meta name="keywords" content="Venus Charm">
    <meta name="description" content="Venus Charm">
    <meta name="revisit-after" content="1 days">
    <meta name="rating" content="general">
    
    <!-- for Facebook -->
    <meta property="og:title" content="Venus Charm">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{asset('images/venus-charm-banner-dau-trang-1-.jpg')}}">
    <meta property="og:description" content="Venus Charm">
    <meta property="og:site_name" content="Venus Charm">
    <meta property="fb:admins" content="">
    <meta property="fb:app_id" content="">

    <!-- for Twitter -->          
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Venus Charm">
    <meta name="twitter:description" content="Venus Charm">
    <meta name="twitter:image" content="{{asset('images/venus-charm-banner-dau-trang-1-.jpg')}}">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- thư viện css -->
    <link rel="stylesheet"  href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('css/lightslider.css')}}"/>
    <!-- code css -->
    <link rel="stylesheet"  href="{{asset('css/style.css')}}"/>
</head>
<!-- yêu cầu người code chức năng để ý kỹ code html của các trang copy thiếu hay tự làm lỗi thì tự chỉnh -->
<body>
    <header id="header-site">
        <div class="wp-header">
         <div id="sticky-wrapper" class="sticky-wrapper header-sticky">
            <div class="main-menu-bar sticky-header-enable">
                <div class="wp-main-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                  <div class="wp-header-mobile">
                                        <div class="wp-logo text-center">
                                            <!-- /** Yêu cầu trang chủ để logo h1 còn các trang khác để h2 **/ -->
                                            <h1 class="entry-title">
                                                <a href="">
                                                    <img class="img-responsive" src="{{asset('images/logo.png')}}" alt="">
                                                </a>
                                            </h1>
                                        </div>
                                  </div>
                            </div>
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="wp-main-menu clearfix">
                                    <nav id="main-menu" class=" navbar navbar-default" role="navigation">
                                        <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding: 0px;">
                                            <ul class="nav navbar-nav navbar-left" id="primary-menu">
                                                <li class="dropdown">
                                                    <a href="#"><span>Áo lót</span></a>
                                                    <span class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></span>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" title="Áo lót đệm dày">Áo lót đệm dày</a>
                                                        </li>
                                                        <li>
                                                            <a href="l" title="Áo lót đệm vừa">Áo lót đệm vừa</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Áo lót đệm mỏng">Áo lót đệm mỏng</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Áo lót không gọng">Áo lót không gọng</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Áo lót có gọng">Áo lót có gọng</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Bralette">Bralette</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Áo lót tạo kiểu">Áo lót tạo kiểu</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Phụ kiện áo lót">Phụ kiện áo lót</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#"><span>Quần Lót</span></a>
                                                    <span class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></span>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" title="Combo tiết kiệm">Combo tiết kiệm</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót cotton">Quần lót cotton</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót ren">Quần lót ren</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót không viền">Quần lót không viền</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót thun lạnh">Quần lót thun lạnh</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót lọt khe"> Quần lót lọt khe</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót 3/4 mông"> Quần lót 3/4 mông</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Quần lót cả mông">Quần lót cả mông</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#"><span>Set bras</span></a>
                                                    <span class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></span>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" title="Bộ đồ lót đệm dày">Bộ đồ lót đệm dày</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Bộ đồ lót đệm vừa"> Bộ đồ lót đệm vừa</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Bộ đồ lót đệm mỏng">Bộ đồ lót đệm mỏng</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Bộ đồ lót sexy">Bộ đồ lót sexy</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Bộ đồ lót ren">Bộ đồ lót ren</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#"><span>Đồ ngủ</span></a>
                                                    <span class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></span>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" title="Váy ngủ sexy">Váy ngủ sexy</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Pijama dài tay">Pijama dài tay</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Pijama cộc tay">Pijama cộc tay</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Bộ ngủ 2 dây">Bộ ngủ 2 dây</a>
                                                        </li>
                                                        <li>
                                                            <a href="l" title="Áo choàng ngủ">Áo choàng ngủ</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Blog</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div> <!-- end wp-main-menu -->
                            </div>
                            <div class="col-md-4 hidden-sm hidden-xs">
                                <div class="wp-main-header-right">
                                    <?php /** form đăng ký **/ ?>
                                    <div class="wp-search">
                                        <form action="" method="get">
                                            <button class="btn btn-default btn-search" type="submit">
                                                <i class="far fa-search" aria-hidden="true"></i>
                                            </button>
                                            <input type="text" placeholder="Bạn cần tìm gì" value="" name="key" class="form-control">
                                        </form>
                                    </div><!--  end -->
                                    <div class="wp-user">
                                        <i class="far fa-user"></i>
                                        <div class="wp-sub-menu">
                                            <ul class="ul-b list-login">
                                                <li><a href="#">Đăng nhập</a></li>
                                                <li><a href="#">Đăng ký</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="wp-cart">
                                        <a class="btn-click-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                           <div id="site-cart" class="">
                                <div class="site-nav-container-last">
                                    <button id="site-close-handle" class="site-close-handle">
                                        <img src="{{asset('images/clo.png')}}" alt="Đóng">
                                    </button>
                                    <p class="title">Giỏ hàng</p>
                                    <span class="textCartSide">Bạn đang có <span id="qtotalitems"><b>1</b></span> sản phẩm trong giỏ hàng.</span>
                                    <div class="cart-view clearfix">


                                        <table id="cart-view">
                                            <tbody id="ajax-cart-form">
                                                <!-- khi có sản phẩm -->
                                                <tr class="item_2" data-id="1041431100">
                                                    <td class="img">
                                                        <a href="ao-freedom-1805-p846.html">
                                                            <!-- ảnh được cắt 470x570 -->
                                                            <img src="{{asset('images/1590838844.jpg')}}" alt="Áo Freedom 1805">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input name="quantity" value="" class="quantity ajax-quantity" type="hidden">
                                                        <a class="pro-title-view" href="#">Áo Freedom 1805</a>
                                                        <span class="pro-price-view">259.000₫</span>
                                                        <span class="pro-price-view">Số lượng: 1</span>
                                                        <div class="variant">
                                                            <span>Size : 34</span>
                                                            <span>Màu sắc : Da</span>
                                                        </div>
                                                        <div class="remove_link remove-cart delete_item"><a href="javascript:void(0);" class="quantity">Xóa</a></div>
                                                    </td>
                                                </tr>
                                                <!-- không có sản phẩm khi nào làm chức năng thì xóa đoạn code style đi chuyển thành đặt điều kiện -->
                                                <tr class="notification" style="display: none;">
                                                    <td colspan="2" class="text-center">
                                                        Chưa có sản phẩm nào trong giỏ hàng
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <span class="line"></span>
                                        <table class="table-total">
                                            <tbody><tr>
                                                <td class="text-left"><b>TỔNG TIỀN TẠM TÍNH:</b></td>
                                                <td class="text-right" id="total-view-cart">259.000₫</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="dat-mua.html" class="checkLimitCart linktocheckout button dark">Đặt hàng</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="javascript:void(0);" class="linktocart button dark">Chọn thêm sản phẩm <i class="fa fa-arrow-right"></i></a>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> <!-- end header -->


<!-- Nội dung conter -->
<main id="main-site">

</main>



</body>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/lightslider.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/customer.js')}}"></script>
</html>
