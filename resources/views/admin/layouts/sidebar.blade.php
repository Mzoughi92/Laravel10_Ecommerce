<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-align: center;">

      <span class="brand-text font-weight-light">E-commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="align-self-stretch">
        <div class="col-xs-16">
        <center><img src="{{ asset('uploads') }}/{{ Auth::user()->photo }}" class="img-circle"  width="150" height="150" alt="User Image"></center>  
        </div>
        <div class="info">
         <center><b><a href="#" class="d-block" style="color:#ffffff">{{ Auth::user()->name }}</a></b></center> 
        </div>
      </div>

    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    
      
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active  @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>&nbsp;&nbsp;&nbsp;Armaturenbrett</p>
            </a>
          </li>


          @if ( Auth::user()->email == 'admin@gmail.com' )
      
          <li class="nav-item">
            <a href="{{ url('/admin/admin/list') }}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>&nbsp;&nbsp;&nbsp;Administrator</p>
            </a>
          </li>

          @else

    
          <li class="nav-item">
            <a href="{{ url('/admin/admin/list') }}" hidden class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>&nbsp;&nbsp;&nbsp;Administrator</p>
            </a>
          </li>

          @endif


          
       

          <li class="nav-item">
            <a href="{{ url('/admin/customer/list') }}" class="nav-link @if(Request::segment(2) == 'customer') active @endif">
            <i class="nav-icon fas fa-user"></i>
              <p>
                &nbsp;&nbsp;&nbsp;Kunden
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('/admin/orders/list') }}" class="nav-link @if(Request::segment(2) == 'orders') active @endif">
              &nbsp; <i class="fab fa-first-order"></i>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aufträge
              </p>
            </a>
          </li>


             <li class="nav-item">
            <a href="{{ url('/admin/category/list') }}" class="nav-link @if(Request::segment(2) == 'category') active @endif">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>&nbsp;&nbsp;kategorien</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('/admin/sub_category/list') }}" class="nav-link @if(Request::segment(2) == 'sub_category') active @endif">
              <i class="nav-icon fas fa-list-alt"></i>
              
              <p>&nbsp;&nbsp;Unterkategorie</p>
            </a>
          </li>


          
          <li class="nav-item">
            <a href="{{ url('/admin/brand/list') }}" class="nav-link @if(Request::segment(2) == 'brand') active @endif">
              &nbsp;<i class="fab fa-android"></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brands</p>
            </a>
          </li>


        

          <li class="nav-item">
            <a href="{{ url('/admin/product/list') }}" class="nav-link @if(Request::segment(2) == 'product') active @endif">
              &nbsp;<i class="fab fa-product-hunt"></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;Produkten</p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="{{ url('/admin/slider/list') }}" class="nav-link @if(Request::segment(2) == 'slider') active @endif">
              <i class="nav-icon fas fa fa-flag"></i>
              <p>&nbsp;Banners</p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="{{ url('/admin/discount_code/list') }}" class="nav-link @if(Request::segment(2) == 'discount_code') active @endif">
              <i class="nav-icon fa fa-percent"></i>
              <p>&nbsp;Gutschein code</p>
            </a>
          </li>


               
          <li class="nav-item">
            <a href="{{ url('/admin/shipping_charge/list') }}" class="nav-link @if(Request::segment(2) == 'shipping_charge') active @endif">
              <i class="fas fa-shipping-fast"></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;Versand kosten</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('/admin/page/list') }}" class="nav-link @if(Request::segment(2) == 'page') active @endif">
              <i class="fas fa-shipping-fast"></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;Pages</p>
            </a>
          </li>


          
          <li class="nav-item">
            <a href="{{ url('/admin/system-setting') }}" class="nav-link @if(Request::segment(2) == 'system-setting') active @endif">
              <i class="fas fa-shipping-fast"></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;System Setting</p>
            </a>
          </li>


       

          <li class="nav-item">
            <a href="{{ url('/admin/logout') }}" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;Ausloggen</p>
            </a>
          </li>

     
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>