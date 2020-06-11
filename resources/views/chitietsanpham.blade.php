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

    <title>Chi tiết sản phẩm</title>

    <!-- các thẻ meta -->

    <meta name="keywords" content="Venus Charm">
    <meta name="description" content="Venus Charm">
    <meta name="revisit-after" content="1 days">
    <meta name="rating" content="general">
    
    <!-- for Facebook -->
    <meta property="og:title" content="Venus Charm">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{asset('public/images/venus-charm-banner-dau-trang-1-.jpg')}}">
    <meta property="og:description" content="Venus Charm">
    <meta property="og:site_name" content="Venus Charm">
    <meta property="fb:admins" content="">
    <meta property="fb:app_id" content="">

    <!-- for Twitter -->          
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Venus Charm">
    <meta name="twitter:description" content="Venus Charm">
    <meta name="twitter:image" content="{{asset('public/images/venus-charm-banner-dau-trang-1-.jpg')}}">
    <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- thư viện css -->
    <link rel="stylesheet"  href="{{asset('public/css/fontawesome.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/css/all.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/css/jquery.fancybox.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/css/owl.carousel.css')}}"/>
    <!-- code css -->
    <link rel="stylesheet"  href="{{asset('public/css/style.css')}}"/>
</head>
<!-- yêu cầu người code chức năng để ý kỹ code html của các trang copy thiếu hay tự làm lỗi thì tự chỉnh -->
<body class="page-child">
    <header id="header-site">
        <div class="wp-header">
             <div id="sticky-wrapper" class="sticky-wrapper">
                <div class="main-menu-bar sticky-header-enable">
                    <div class="wp-main-header clearfix ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                      <div class="wp-header-mobile">
                                            <div class="wp-logo text-center">
                                                <!-- /** Yêu cầu trang chủ để logo h1 còn các trang khác để h2 **/ -->
                                                <h1 class="entry-title">
                                                    <a href="">
                                                        <img class="img-responsive" src="{{asset('public/images/logo.png')}}" alt="">
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
                                            <img src="{{asset('public/images/clo.png')}}" alt="Đóng">
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
                                                                <img src="{{asset('public/images/1590838844.jpg')}}" alt="Áo Freedom 1805">
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
        <section class="sec-main-page">
            <div class="container-fluid">
                <div class="wp-img-ctsp hidden-xs">
                    <div class="row" style="position: relative;">
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="wp-img-left">
                                <div class="tab-content">
                                    <div id="img-id4146" class="tab-pane fade row active in">
                                        <!-- ảnh cắt với kích thức 703x800 -->
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831433.jpg')}}">
                                        </div>
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831440.jpg')}}">
                                        </div>
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831446.jpg')}}">
                                        </div>
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831453.jpg')}}">
                                        </div>
                                    </div>

                                    <div id="img-id4145" class="tab-pane fade row">
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831387.jpg')}}">
                                        </div>
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831396.jpg')}}">
                                        </div>
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831403.jpg')}}">
                                        </div>
                                        <div class="wp-sautab img-cover col-md-6 col-xs-6 col-sm-6"><img src="{{asset('public/images-demo/1590831409.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-3 col-sm-4 col-xs-12 pca-pl-r fixed-menu" >
                                <div class="wp-text-right">
                                    <h1 class="h1-title-ctsp">Quần 9872</h1>
                                    <div class="price-ctsp"><span class="int" style="margin-right: 10px">70.000 đ</span></div>
                                    <div class="wpmaxx">
                                        <p>Mã sản phẩm: 002697</p>
                                        <p>Trạng thái: Còn hàng</p>
                                    </div>
                                    <div class="wp-chonmau">
                                        <ul class="nav nav-pills">
                                            <li class="chose_attr_advanced_color active" data-title="Da"><a class="" data-toggle="pill" href="#img-id4146">
                                                <span class="color color4" style="background: url('{{asset('public/images-demo/1590831427.jpg')}}')"></span></a>
                                            </li>
                                            <li class="chose_attr_advanced_color" data-title="Đen"><a class="" data-toggle="pill" href="#img-id4145">
                                                <span class="color color4" style="background: url('{{asset('public/images-demo/1590831382.jpg')}}')"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wp-chonsize">
                                        <ul class="ul-b list-size">                                        
                                            <li><a href="javascript:void();" class="filtersize active" data-title="F" data-saleoff="70000" data-id="F ">F</a></li>                                        
                                            <div class="error_size"></div>
                                        </ul>
                                    </div>                            
                                    <div class="huongdan-chonsize"><a href="#" data-toggle="modal" data-target="#modal-size">Hướng dẫn chọn size</a></div>
                                    <div class="wwp-uudai-rieng"><p>Ưu đãi dành riêng cho bạn</p></div>
                                    <div class="wp-btn-mua">
                                        <button class="ajax-addtocart" data-quantity="1" data-id="845" data-redirect="redirect" data-price="70000" data-size="F" data-color="Da">Mua ngay<i class="fas fa-shopping-bag"></i></button>
                                    </div>
                                    <div class="wp-list-dinhvu2">
                                        <ul class="ul-b lits-dv2">
                                            <li>
                                                <div class="icon-dv2"><img src="{{asset('public/images-demo/venus-charm-feeship-don-hang-700k.jpg')}}" alt="Miễn phí giao hàng toàn quốc"></div>
                                                <div class="text-dv2">
                                                    <p>Miễn phí giao hàng toàn quốc</p>
                                                    <span>(Đơn hàng trên 700.000 đ)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-dv2"><img src="{{asset('public/images-demo/venus-charm-bao-hanh-san-pham-30-ngay-copy.jpg')}}" alt="Hỗ trợ đổi trả khi không vừa size"></div>
                                                <div class="text-dv2">
                                                    <p>Hỗ trợ đổi trả khi không vừa size</p>
                                                    <span>(Đổi trả trong 03 ngày)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-dv2"><img src="{{asset('public/images-demo/dam-bao-san-pham-nhu-hinh.jpg')}}" alt="Cam kết sản phẩm như hình"></div>
                                                <div class="text-dv2">
                                                    <p>Cam kết sản phẩm như hình</p>
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-dv2"><img src="{{asset('public/images-demo/bao-hanh-venus-charm-30-ngay.png')}}" alt="Bảo hành sản phẩm trong 30 ngày"></div>
                                                <div class="text-dv2">
                                                    <p>Bảo hành sản phẩm trong 30 ngày</p>
                                                    <span>(Tất cả các lỗi từ nhà sản xuất)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wp-tab-mota">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a data-toggle="pill" href="#tab-mt-1"><span>MÔ tả</span></a></li>
                                            <li><a data-toggle="pill" href="#tab-mt-2"><span>Phí ship</span></a></li>
                                            <li><a data-toggle="pill" href="#tab-mt-3"><span>Đổi trả</span></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab-mt-1" class="tab-pane fade in active">
                                                <div class="wp-sautab" style="padding: 15px 0px;">
                                                    <p></p><p>Quần LK ren pinkdear sexy quyến rũ, tôn v3 đầy đặn&nbsp;</p>

                                                    <p>Chất liệu ren thoáng mát, mềm mịn với thiết kế 2 dây hông gợi cảm&nbsp;</p>
                                                    <p></p>
                                                </div>
                                           </div>
                                            <div id="tab-mt-2" class="tab-pane fade">
                                                <div class="wp-sautab" style="padding: 15px 0px;">
                                                    <p><b>FREESHIP VỚI ĐƠN HÀNG TỪ 03 SẢN PHẨM TRỞ LÊN</b></p>
                                                    <p>- Không áp dụng cũng các chương trình khuyến mại khác&nbsp;(giảm giá, combo, chiết khấu&nbsp;khách VIP)</p>
                                                    <p>- Thời gian áp dụng từ: 03/05 - 30/05/2020</p>
                                                    <p>&nbsp;</p>
                                                    <p><b>PHÍ SHIP VỚI ĐƠN HÀNG DƯỚI 03 SẢN PHẨM</b></p>
                                                    <p>- Khách hàng tại Hà Nội: 22.000 đ</p>
                                                    <p>- Khách hàng tại tỉnh khác: 33.000 đ</p>
                                                </div>
                                            </div>
                                            <div id="tab-mt-3" class="tab-pane fade">
                                                <div class="wp-sautab" style="padding: 15px 0px;">
                                                    <p style="text-align: justify;"><strong>CHÍNH SÁCH ĐỔI&nbsp;SẢN PHẨM VENUS CHARM</strong></p>
                                                    <p style="text-align: justify;">- Sản phẩm đổi trả phải còn nguyên tem mác, không qua sử dụng hay giặt là.</p>
                                                    <p style="text-align: justify;">- Đổi sản phẩm bằng hoặc hơn giá trong vòng 03 ngày kể từ khi nhận hàng.</p>
                                                    <p style="text-align: justify;">- Không áp dụng đổi trả sản phẩm trong các chương trình khuyến mại.</p>
                                                    <p style="text-align: justify;">- KHÔNG áp dụng đổi trả sản phẩm QUẦN LÓT và phụ kiện dưới mọi hình thức.</p>
                                                    <p style="text-align: justify;">- Venus Charm bảo hành sản phẩm trong vòng 30 ngày tất cả các lỗi từ nhà sản xuất.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wp-form-sdt">                                
                                        <form action="" id="sform_phone" method="post">
                                            <div class="error uk-alert" style="display: none;"></div>
                                            <input type="text" class="form-group form-control phone" placeholder="Nhập số điện thoại" name="phone">
                                            <button class="btn btn-default btn-hover">Gọi lại cho tôi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wp-review">
                    <div class="wp-title-sec">
                        <h2 class="h2-title text-center">ĐÁNH GIÁ</h2>
                        <div class="so-danhgia">
                            <span>
                                <a href="javascript:void();" class="click_show_comment"> <span class="count_comments">0</span> Reviews</a>,
                                <a href="javascript:void();" class="click_show_comment"><span class="count_cauhoi">0</span> Q&amp;As</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="box-datmua col-md-12 col-xs-12 col-sm-2">
                    <div class="wp-icon">
                        <img src="{{asset('public/images/icon-c4.svg')}}" alt="sản phẩm đặc biệt">
                    </div>
                    <div class="wp-text col-md-8 col-sm-7 col-xs-12" style="text-align: center">
                        <p> Sản phẩm đặc biệt dành cho:</p>
                        <p></p>
                    </div>
                    <div class="wp-btn col-md-2 col-xs-12 col-sm-3" style="text-align: center">
                        <a href="javascript:void();" class="ajax-addtocart">ĐẶT MUA</a>
                    </div>
                </div>
                <div class="sp-quantam">
                    <div class="wp-title-spqt"><h2 class="h2-title">Có thể bạn quan tâm</h2></div>
                    <div class="wp-list-sp-home">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="wp-item-sp">
                                    <!--màu sắc -->
                                    <div style="position: relative">
                                        <div class="wp-list-sp-slide">
                                            <div class="wp-item-sp-main active">
                                                <div class="slide-sp owl-carousel">
                                                    <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760847.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="ao-6883-cao-cap-p847.html">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760841.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end slider 1 -->
                                            <div class="wp-item-sp-main">
                                                <div class="slide-sp owl-carousel">
                                                    <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760889.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                     <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760896.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end slider 2 -->
                                        </div>
                                        <div class="wp-add-to-cart">
                                            <a href="">
                                                <span>Thêm vào giỏ</span>
                                                <i class="fas fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end màu sắc-->
                                    <div class="wp-name-sp">
                                        <h3 class="h3-title">
                                            <a href="">Áo 6883 Cao Cấp</a>
                                        </h3>
                                    </div>
                                    <div class="wp-price-sp">
                                        <span class="int">450.000đ</span>
                                    </div>
                                    <!--màu sắc đầu tiên-->
                                    <div class="wp-list-check-color">
                                        <ul class="ul-b list-color-sp">
                                            <li class="item-color color-1 active">
                                                <span style="background: url('{{asset('public/images-demo/1589760834.jpg')}}')"></span>
                                            </li>
                                            <li class="item-color color-1">
                                                <span style="background: url('{{asset('public/images-demo/1589760841.jpg')}}')"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end màu sắc đầu tiên-->
                                </div>
                            </div> <!-- end 1 sản phẩm -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="wp-item-sp">
                                    <!--màu sắc -->
                                    <div style="position: relative">
                                        <div class="wp-list-sp-slide">
                                            <div class="wp-item-sp-main active">
                                                <div class="slide-sp owl-carousel">
                                                    <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760847.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="ao-6883-cao-cap-p847.html">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760841.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end slider 1 -->
                                            <div class="wp-item-sp-main">
                                                <div class="slide-sp owl-carousel">
                                                    <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760889.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                     <div class="item">
                                                        <div class="wp-img-slide-sp">
                                                            <a href="">
                                                                <img class="el_image" src="{{asset('public/images-demo/1589760896.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end slider 2 -->
                                        </div>
                                        <div class="wp-add-to-cart">
                                            <a href="">
                                                <span>Thêm vào giỏ</span>
                                                <i class="fas fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end màu sắc-->
                                    <div class="wp-name-sp">
                                        <h3 class="h3-title">
                                            <a href="">Áo 6883 Cao Cấp</a>
                                        </h3>
                                    </div>
                                    <div class="wp-price-sp">
                                        <span class="int">450.000đ</span>
                                    </div>
                                    <!--màu sắc đầu tiên-->
                                    <div class="wp-list-check-color">
                                        <ul class="ul-b list-color-sp">
                                            <li class="item-color color-1 active">
                                                <span style="background: url('{{asset('public/images-demo/1589760834.jpg')}}')"></span>
                                            </li>
                                            <li class="item-color color-1">
                                                <span style="background: url('{{asset('public/images-demo/1589760841.jpg')}}')"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end màu sắc đầu tiên-->
                                </div>
                            </div> <!-- end 1 sản phẩm -->
                        </div>          
                    </div>
                </div>

            </div>
        </section> <!-- end nội dung -->
    </main>


    <!-- chân trang -->
    <footer id="footer-site">
        <div class="container-fluid pd-0">
            <div class="wp-footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="wp-ft-top">
                            <h3 class="h3-title-ft">GỌI MUA HÀNG <span>(09:00-22:00)</span> </h3>
                            <p class="p-phone">
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:0989935818"> <span>0989935818</span></a>
                            </p>
                            <p class="hidden-lg hidden-md p-time">( 9:00 - 22:00 )</p>
                            <p class="p-span">Tất cả các ngày trong tuần</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="wp-ft-top">
                            <h3 class="h3-title-ft">GÓP Ý, KHIẾU NẠI <span>(09:00-22:00)</span></h3>
                            <p class="p-phone">
                                <i class="fas fa-phone-alt"></i>
                                <span><a href="tel:0989097523">0989097523</a></span>
                            </p>
                            <p class="hidden-lg hidden-md p-time">( 9:00 - 22:00 )</p>
                            <p class="p-span">Tất cả các ngày trong tuần</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wp-ft-top ft-form-ft">
                            <h3 class="h3-title-ft">ĐĂNG KÝ NHẬN THÔNG TIN MỚI</h3>
                            <div class="wp-form-dk">
                                <form action="" id="sform" method="post">
                                    <div class="error alert" style="display: none;"></div>

                                    <div class="form-dk-email">
                                        <input type="email" placeholder="Email của bạn" class="form-control email" required="" name="email">
                                        <input type="hidden" value="ĐĂNG KÝ NHẬN THÔNG TIN MỚI" class="form-control title" name="title">
                                        <button class="btn btn-default btn-dk btn-hover">Đăng ký</button>
                                    </div>
                                    <div class="checkbox hidden-xs">
                                        <label>
                                            <input type="checkbox" class="check" value="" required=""> Tôi đồng ý với các điều kiện &amp; điều khoản
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wp-ft-top">
                            <h3 class="h3-title-ft">LIKE VENUS TRÊN MẠNG XÃ HỘI</h3>
                            <ul class="ul-b list-mxh">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="" target="_blank" class="fa-zalo"><img src="{{asset('public/images/logo-zalo-vector.png')}}" alt="Zalo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--  end -->
            <div class="wp-footer-main">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wp-ft-main">
                            <h3 class="h3-title-ft">HỆ THỐNG CỬA HÀNG</h3>
                            <ul class="ul-b list-ft-main" style="display: none;">
                                <li><a href="" title="Add 1: 11 Đội Cấn, Ba Đình, Hà Nội">Add 1: 11 Đội Cấn, Ba Đình, Hà Nội</a></li>
                                <li><a href="" title="Add 2: 209 Cầu Giấy, Cầu Giấy, Hà Nội">Add 2: 209 Cầu Giấy, Cầu Giấy, Hà Nội</a></li>
                                <li><a href="" title="Add 3: 31 Tây Sơn, Đống Đa, Hà Nội">Add 3: 31 Tây Sơn, Đống Đa, Hà Nội</a></li>
                                <li><a href="" title="Add 4: Số 01 Đại Cồ Việt, HBT, Hà Nội">Add 4: Số 01 Đại Cồ Việt, HBT, Hà Nội</a></li>
                                <li><a href="/" title="Add 5: 678 Nguyễn Trãi, Thanh Xuân, Hà Nội">Add 5: 678 Nguyễn Trãi, Thanh Xuân, Hà Nội</a></li>
                                <li><a href="/" title="Add 6: 112C1 Phạm Ngọc Thạch, Đống Đa, Hà Nội">Add 6: 112C1 Phạm Ngọc Thạch, Đống Đa, Hà Nội</a></li>
                                <li><a href="/" title="Add 7: A27 Shophouse Vincom, Lê Hoàn, Thanh Hoá">Add 7: A27 Shophouse Vincom, Lê Hoàn, Thanh Hoá</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wp-ft-main">
                            <h3 class="h3-title-ft">HỖ TRỢ KHÁCH HÀNG</h3>
                            <ul class="ul-b list-ft-main" style="display: none;">
                                <li><a href="" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
                                <li><a href="" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                                <li><a href="" title="Chính sách thanh toán">Chính sách thanh toán</a></li>
                                <li><a href="chinh-sach-bao-mat.html" title="Chính sách bảo mật">Chính sách bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wp-ft-main">
                            <h3 class="h3-title-ft">VỀ VENUS CHARM</h3>
                            <ul class="ul-b list-ft-main" style="display: none;">
                                <li><a href="gioi-thieu-venus-charm.html" title="Giới thiệu">Giới thiệu </a></li>
                                <li><a href="lien-he.html" title="Liên hệ">Liên hệ</a></li>
                                <li><a href="tuyen-dung-venus-charm.html" title="Tuyển dụng">Tuyển dụng</a></li>
                                <li><a href="javascript: void(0)" title="Tìm đại lý">Tìm đại lý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wp-ft-main">
                            <h3 class="h3-title-ft">Fanpage của chúng tôi</h3>
                            <div class="ul-b list-ft-main" style="display: none;">
                                <div class="wp-iframe-fb">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/Venuscharm.com.vn/%2F&amp;tabs=timeline&amp;width=360&amp;height=200&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1821093994887965" width="360" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="wp-footer-bottom">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="left-ft-bt">
                        <span>© 2019 Venus</span>
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="right-ft-bt text-right">
                       
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
     <div class="feedback">
        <a href="#" target="_blank"><div class="inner rotate">Feedback</div></a>
    </div>
</body>



<script src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/owl.carousel.js')}}"></script>
<script src="{{asset('public/js/rangeslider.js')}}"></script>
<script src="{{asset('public/js/fontawesome.min.js')}}"></script>
<script src="{{asset('public/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('public/js/sticky-kit.min.js')}}"></script>
<script src="{{asset('public/js/slick.min.js')}}"></script>
<script src="{{asset('public/js/customer.js')}}"></script>

<script>
    if($(window).width() > 768) {

        $(document).ready(function() {
            $('.wp-footer-main').click(function() {
                $('.list-ft-main').slideToggle("fast");
            });
        });
    }
</script>
</html>
