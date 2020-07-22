<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>
    {{-- to make right logout --}}
    <ul class="navbar-nav ml-auto">
        
    </ul>


      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

          <ul class="navbar-nav">
            <li class="nav-item">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @auth
                        <img src="{{asset('images/adminLte/profile.jpg')}}" class="user-image">
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    @endauth
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{asset('images/adminLte/profile.jpg')}}" class="img-circle" alt="User Image">

                       
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">

                        <div class="pull-right">
                        </div>
                        <div class="pull-left">
                            <a href="javascript:;" class="btn btn-default btn-flat" onclick="getElementById('logout').submit();">Logout</a>
                            <form action="{{ route('admin.logout') }}" method="POST" id="logout">
                                @csrf
                            </form>
                        </div>


                    </li>
                </ul>
            </li>
        </ul>
  </nav>
  <!-- /.navbar -->