<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky nav-sticky">
    <div class="container">
        <!-- Start Logo container-->
        <a class="logo" href="{{ url('/') }}">
                    <span class="inline-block dark:hidden">
                        <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" class="l-dark" height="24"
                             alt="">
                        <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" class="l-light" height="24"
                             alt="">
                    </span>
            <img src="{{ asset('frontend/assets/images/logo-light.png') }}" height="24" class="hidden dark:inline-block"
                 alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            @if(\Illuminate\Support\Facades\Auth::check())
                <li class="inline mb-0">
                    <a href="{{ url('/profile-activity') }}"
                       class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                            data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
                </li>

                <li class="inline pl-1 mb-0">
                    <a href="{{ url('/logout') }}"
                       class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Log
                        Out</a>
                </li>
            @else
                <li class="inline mb-0">
                    <a href="{{ url('/login') }}"
                       class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                            data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
                </li>

                <li class="inline pl-1 mb-0">
                    <a href="{{ url('/sign-up') }}"
                       class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
                </li>
            @endif
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li class="{{ request()->is('buy') ? 'active' : '' }}">
                    <a href="{{ url('/buy') }}" class="sub-menu-item">Buy</a>
                </li>

                <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                    <a href="{{ url('/about-us') }}" class="sub-menu-item">About Us</a>
                </li>

                <li class="has-submenu parent-parent-menu-item {{ request()->is('feature') || request()->is('faqs') || request()->is('terms') || request()->is('privacy') ? 'active' : '' }}">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="{{ request()->is('feature') ? 'active' : '' }}">
                            <a href="{{ url('/feature') }}" class="sub-menu-item">Features</a>
                        </li>

                        <li class="{{ request()->is('faqs') ? 'active' : '' }}">
                            <a href="{{ url('/faqs') }}" class="sub-menu-item">Faqs</a>
                        </li>

                        <li class="has-submenu parent-menu-item {{ request()->is('terms') || request()->is('privacy') ? 'active' : '' }}">
                            <a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li class="{{ request()->is('terms') ? 'active' : '' }}">
                                    <a href="{{ url('/terms') }}" class="sub-menu-item">Terms of Services</a>
                                </li>

                                <li class="{{ request()->is('privacy') ? 'active' : '' }}">
                                    <a href="{{ url('/privacy') }}" class="sub-menu-item">Privacy Policy</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                    <a href="{{ url('/contact-us') }}" class="sub-menu-item">Contact</a>
                </li>
            </ul><!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
