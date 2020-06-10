<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link navbar-info">
    <img src="{{ asset('public/images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">HRM Ecommer</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('public/images/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Hamrongmedia</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ADMIN SHOP</li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-cart-arrow-down"></i>
            <p>
              Quản lý đơn hàng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/order" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <span>Quản lý đơn hàng</span></a>
            </li>
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/order_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <span>Trạng thái đơn hàng</span></a>
            </li>
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/payment_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i> <span>Trạng thái thanh toán</span></a>
            </li>
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/shipping_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i> <span>Trạng thái vận chuyển</span></a>
            </li>                                 
          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-folder-open"></i>
            <p>
              Sản phẩm & Danh mục
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/order" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <span>Quản lý sản phẩm</span></a>
            </li>
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/order_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <span>Quản lý danh mục</span></a>
            </li>
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/payment_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i> <span>Nhóm thuộc tính</span></a>
            </li>
            <li class="nav-item has-treeview">
              <a href="http://localhost/s-cart/public/sc_admin/shipping_status" class="nav-link">
                <i class="far fa-circle nav-icon"></i> <span>Quản lý phí vận chuyển</span></a>
            </li>                                 
          </ul>
        </li>
        <li class="nav-header">ADMIN CONTENT</li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fa fa-edit"></i>
            <p>
              Blog/Tin tức  
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fa fa-clone"></i>
            <p>
              Trang  
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Thư viện ảnh  
            </p>
          </a>
        </li>
        <li class="nav-header">ADMIN SYSTEM</li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fa fa-user-shield"></i>
            <p>
              Admin  
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fa fa-cogs"></i>
            <p>
              Quản lý cấu hình  
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="http://localhost/s-cart/public/sc_admin/order" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <span>Thông tin cửa hàng</span></a>
              </li>
              <li class="nav-item has-treeview">
                <a href="http://localhost/s-cart/public/sc_admin/order_status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <span>Cấu hình url</span></a>
              </li>
              <li class="nav-item has-treeview">
                <a href="http://localhost/s-cart/public/sc_admin/payment_status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i> <span>Cấu hình website</span></a>
              </li>
              <li class="nav-item has-treeview">
                <a href="http://localhost/s-cart/public/sc_admin/shipping_status" class="nav-link">
                  <i class="far fa-circle nav-icon"></i> <span>Cấu hình Email</span></a>
              </li>                                 
            </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>