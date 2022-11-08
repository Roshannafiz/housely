<div class="header">
    <div class="header-left">
        <a href="{{ url('/dashboard') }}" class="logo">
            <img src="{{ asset('admin/assets/img/h-logo.png') }}" alt="logo">
            <span class="logoclass">Housely</span>
        </a>
        <a href="{{ url('/dashboard') }}" class="logo logo-small">
            <img src="{{ asset('admin/assets/img/h-logo.png') }}"
                 alt="Logo" width="30"
                 height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                    @if(\Illuminate\Support\Facades\Auth::user()->image)
                        <img class="rounded-circle"
                             src="{{ asset('admin/images/upload-user/' . \Illuminate\Support\Facades\Auth::user()->image) }}"
                             width="31"
                             alt="Admin Image">
                    @else
                        <img class="rounded-circle"
                             src="{{ asset('admin/assets/img/profiles/user.png') }}"
                             width="31"
                             alt="Admin Image">
                    @endif
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        @if(\Illuminate\Support\Facades\Auth::user()->image)
                            <img
                                src="{{ asset('admin/images/upload-user/' . \Illuminate\Support\Facades\Auth::user()->image) }}"
                                alt="User Image"
                                class="avatar-img rounded-circle">
                        @else
                            <img
                                src="{{ asset('admin/assets/img/profiles/user.png') }}"
                                alt="User Image"
                                class="avatar-img rounded-circle">
                        @endif
                    </div>
                    <div class="user-text">
                        <h6>
                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                        </h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>

                <a class="dropdown-item" href="{{ url('/profiles') }}">
                    My Profile
                </a>

                <a class="dropdown-item" href="{{ url('/logout') }}">
                    Logout
                </a>
            </div>
        </li>
    </ul>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>
