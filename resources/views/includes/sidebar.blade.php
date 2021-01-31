<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fast Food</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                 MENU
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/products')}}" class="nav-link active">
                  <i class="fas fa-hamburger"></i>
                      <p>All Meals
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/categories')}}" class="nav-link">
                  <i class="fas fa-utensils"></i>
                      <p>A major component
                  </p>
                </a>
              </li>
              @if(session()->has('name'))
                  
              <li class="nav-item">
                <a href="{{url('/contacts')}}" class="nav-link">
                  <i class="fas fa-blender-phone"></i>
                    <p>Contacts Messages
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/orders')}}" class="nav-link">
                 <i class="fas fa-shopping-basket"></i>
                  <p>Order List
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/regist')}}" class="nav-link">
                  <i class="fas fa-users-cog"></i>
                    <p>Make Admine
                  </p>
                </a>
              </li>
              @endif
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>