<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>User</b>Authentication</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">
               @if(Sentinel::check())
                {{Sentinel::getUser()->first_name}}
                @endif
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  
                  <small>
                    @if(Sentinel::check())
                      {{Sentinel::getUser()->first_name}}
                    @endif
                  </small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              
              <li class="user-footer">
                
                @if(Sentinel::check())
                <div class="pull-right">
                  <form action="/logout" method="post" id="logout-form">
                    {{csrf_field()}}
                  <a href="#" onClick="document.getElementById('logout-form').submit()" class="btn btn-default btn-flat">Sign out</a>
                  </form>
                </div>
                @else
                  @php
                    header("Location: " . URL::to('/'), true, 302);
                    exit();
                  @endphp
                @endif
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>