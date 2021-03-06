<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src={{asset('images/adminLte/AdminLTELogo.png')}}
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('images/adminLte/profile.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
          <a href="{{route('admin.home')}}" class="nav-link {{ activeSegment('admin') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
                <a href="{{ route('admin.addbaners.index') }}"  class="nav-link {{ activeSegment('addbaner')  }}">
                    <i class="nav-icon  fa fa-users "></i><span>{{ __('addbaners') }}</span>
                </a>
            </li>
           
         
        </ul>
        
        <!-- <ul class="sidebar-menu">
    
        </ul> -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
