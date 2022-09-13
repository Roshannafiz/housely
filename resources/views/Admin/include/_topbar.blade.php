<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ url('/dashboard') }}">
            <img style="height: auto" src="{{ asset('admin/images/logo-dark.png') }}" class="mr-2" alt="logo"/>
        </a>

        <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}">
            <img src="{{ asset('admin/images/logo-mini.png') }}" alt="logo"/>
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                           aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{ asset('admin/images/faces/face28.jpg') }}" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a>
                    <a href="{{ url('/logout') }}" class="dropdown-item">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- partial -->
