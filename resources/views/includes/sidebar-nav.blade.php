<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="{{ route('homepage') }}">Back To Site</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">{{ Auth::user()->first_name }}
            <strong>{{ Auth::user()->last_name }}</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="{{ route('home') }}">
                <i class="fas fa-tachometer-alt"></i>
                              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
                <i class="fas fa-images"></i>
              <span>Portfolio</span>
              {{-- <span class="badge badge-pill badge-warning">New</span> --}}
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{route('admin_items')}}">All Items
                    {{-- <span class="badge badge-pill badge-success">Pro</span> --}}
                  </a>
                </li>
                <li>
                  <a href="{{ route('create_item_form') }}">Add Item</a>
                </li>
                
              </ul>
            </div>
          </li>

          {{-- <li>
            <a href="{{ route('admin_posts') }}">
                <i class="fa fa-book"></i>
              <span>Posts</span>
            </a>
          </li> --}}

          <li class="sidebar-dropdown">
            <a href="#">
                <i class="fa fa-book"></i>
              <span>All Posts</span>
              {{-- <span class="badge badge-pill badge-danger">3</span> --}}
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                    <a href="{{ route('admin_posts') }}">
                        Posts
  
                    </a>
                  </li>
                <li>
                  <a href="{{ route('create_posts_form') }}">
                      Add Posts

                  </a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-image"></i>
              <span>Media Gallery</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Photo Gallery</a>
                </li>
                <li>
                  <a href="#">Video Gallery</a>
                </li>
                {{-- <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li> --}}
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="{{route('settings_general')}}">
              <i class="fa fa-cog"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
      
        <i class="fa fa-power-off"></i>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </div>
  </nav>



  {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form> --}}