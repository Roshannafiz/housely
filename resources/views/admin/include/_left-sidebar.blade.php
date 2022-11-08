<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Dashboard -->
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <!-- Booking -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('booking-view/*') || request()->is('bookings') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-book"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('booking-view/*') || request()->is('bookings') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/bookings') }}"
                               class="{{ 'houses' == request()->path() ? 'link-active-color' : '' }}">
                                Our Booking
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- House -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('house-view/*') || request()->is('house-edit/*') || request()->is('house-create') || request()->is('houses') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-home"></i>
                        <span> House </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('house-view/*') || request()->is('house-edit/*') || request()->is('house-create') || request()->is('houses') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/houses') }}"
                               class="{{ 'houses' == request()->path() ? 'link-active-color' : '' }}">
                                Our House
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/house-create') }}"
                               class="{{ 'house-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- User -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('user-view/*') || request()->is('user-edit/*') || request()->is('user-change-password/*') || request()->is('user-create') || request()->is('users') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-users-line"></i>
                        <span> User </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('user-view/*') || request()->is('user-edit/*') || request()->is('user-change-password/*') || request()->is('user-create') || request()->is('users') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/users') }}"
                               class="{{ 'users' == request()->path() ? 'link-active-color' : '' }}">
                                Our User
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/user-create') }}"
                               class="{{ 'user-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Category -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('category-edit/*') || request()->is('categories') || request()->is('category-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-brands fa-squarespace"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('category-edit/*') || request()->is('categories') || request()->is('category-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/categories') }}"
                               class="{{ 'categories' == request()->path() ? 'link-active-color' : '' }}">
                                Our Category
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/category-create') }}"
                               class="{{ 'category-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Nav-bar -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('navbar-edit/*') || request()->is('navbars') || request()->is('navbar-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-bars"></i>
                        <span> Navbar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('navbar-edit/*') || request()->is('navbars') || request()->is('navbar-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/navbars') }}"
                               class="{{ 'navbars' == request()->path() ? 'link-active-color' : '' }}">
                                Our Navbar
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/navbar-create') }}"
                               class="{{ 'navbar-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Sub-Nav-Bar -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('subnavbar-edit/*') || request()->is('subnavbars') || request()->is('subnavbar-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-list"></i>
                        <span> Sub-Navbar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('subnavbar-edit/*') || request()->is('subnavbars') || request()->is('subnavbar-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/subnavbars') }}"
                               class="{{ 'subnavbars' == request()->path() ? 'link-active-color' : '' }}">
                                Our Sub-Navbar
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/subnavbar-create') }}"
                               class="{{ 'subnavbar-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Banner -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('banner-edit/*') || request()->is('banners') || request()->is('banner-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-image"></i>
                        <span> Banner </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('banner-edit/*') || request()->is('banners') || request()->is('banner-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/banners') }}"
                               class="{{ 'banners' == request()->path() ? 'link-active-color' : '' }}">
                                Our Banner
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/banner-create') }}"
                               class="{{ 'banner-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Feature -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('feature-edit/*') || request()->is('features') || request()->is('feature-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-brands fa-servicestack"></i>
                        <span> Feature </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('feature-edit/*') || request()->is('features') || request()->is('feature-create') ? 'display: block' : ''  }}">
                        <li>
                            <a href="{{ url('/features') }}"
                               class="{{ 'features' == request()->path() ? 'link-active-color' : '' }}">
                                Our Feature
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/feature-create') }}"
                               class="{{ 'feature-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- How To Work -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('work-edit/*') || request()->is('works') || request()->is('work-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-person-digging"></i>
                        <span> How To Work </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('work-edit/*') || request()->is('works') || request()->is('work-create') ? 'display: block' : ''  }}">
                        <li>
                            <a href="{{ url('/works') }}"
                               class="{{ 'works' == request()->path() ? 'link-active-color' : '' }}">
                                Our Work
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/work-create') }}"
                               class="{{ 'work-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Brand -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('brand-edit/*') || request()->is('brands') || request()->is('brand-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-flag"></i>
                        <span> Brand </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('brand-edit/*') || request()->is('brands') || request()->is('brand-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/brands') }}"
                               class="{{ 'brands' == request()->path() ? 'link-active-color' : '' }}">
                                Our Brand
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/brand-create') }}"
                               class="{{ 'brand-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Agent -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('agent-edit/*') || request()->is('agents') || request()->is('agent-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-users ml-0"></i>
                        <span> Agent </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('agent-edit/*') || request()->is('agents') || request()->is('agent-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/agents') }}"
                               class="{{ 'agents' == request()->path() ? 'link-active-color' : '' }}">
                                Our Agent
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/agent-create') }}"
                               class="{{ 'agent-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Social -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('social-edit/*') || request()->is('socials') || request()->is('social-create') ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-icons"></i>
                        <span> Social </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('social-edit/*') || request()->is('socials') || request()->is('social-create') ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/socials') }}"
                               class="{{ 'socials' == request()->path() ? 'link-active-color' : '' }}">
                                Our Social
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/social-create') }}"
                               class="{{ 'social-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Contact -->
                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('contact-edit/*') || request()->is('contacts') || request()->is('contact-create')  ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-address-book"></i>
                        <span> Contact </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ request()->is('contact-edit/*') || request()->is('contacts') || request()->is('contact-create')  ? 'display: block' : '' }}">
                        <li>
                            <a href="{{ url('/contacts') }}"
                               class="{{ 'contacts' == request()->path() ? 'link-active-color' : '' }}">
                                Our Contact
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/contact-create') }}"
                               class="{{ 'contact-create' == request()->path() ? 'link-active-color' : '' }}">
                                Create
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
