<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ 'dashboard' == request()->path() ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="submenu">
                    <a href="#"
                       class="{{ request()->is('house-view/*') || request()->is('house-edit/*') || request()->is('house-create') || request()->is('houses')  ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-home"></i>
                        <span> House </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'house-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'house-view/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ request()->is('house-view/*') ? 'display: block' : '' }} {{ 'house-create' == request()->path() ? 'display: block' : '' }} {{ 'houses' == request()->path() ? 'display: block' : '' }}">
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

                <li class="submenu">
                    <a href="#"
                       class="{{ 'banner-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'banners' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'banner-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-image"></i>
                        <span> Banner </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'banner-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'banner-create' == request()->path() ? 'display: block' : '' }} {{ 'banners' == request()->path() ? 'display: block' : '' }}">
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

                <li class="submenu">
                    <a href="#"
                       class="{{ 'navbar-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'navbars' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'navbar-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-bars"></i>
                        <span> Navbar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'navbar-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'navbar-create' == request()->path() ? 'display: block' : '' }} {{ 'navbars' == request()->path() ? 'display: block' : '' }}">
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

                <li class="submenu">
                    <a href="#"
                       class="{{ 'subnavbar-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'subnavbars' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'subnavbar-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-list"></i>
                        <span> Sub-Navbar </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'subnavbar-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'subnavbar-create' == request()->path() ? 'display: block' : '' }} {{ 'subnavbars' == request()->path() ? 'display: block' : '' }}">
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

                <li class="submenu">
                    <a href="#"
                       class="{{ 'feature-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'features' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'feature-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-brands fa-servicestack"></i>
                        <span> Feature </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'feature-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'feature-create' == request()->path() ? 'display: block' : '' }} {{ 'features' == request()->path() ? 'display: block' : '' }}">
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


                <li class="submenu">
                    <a href="#"
                       class="{{ 'brand-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'brands' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'brand-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-flag"></i>
                        <span> Brand </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'brand-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'brand-create' == request()->path() ? 'display: block' : '' }} {{ 'brands' == request()->path() ? 'display: block' : '' }}">
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

                <li class="submenu">
                    <a href="#"
                       class="{{ 'category-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'categories' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'category-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-brands fa-squarespace"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'category-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'category-create' == request()->path() ? 'display: block' : '' }} {{ 'categories' == request()->path() ? 'display: block' : '' }}">
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


                <li class="submenu">
                    <a href="#"
                       class="{{ 'agent-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'agents' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'agent-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-users ml-0"></i>
                        <span> Agent </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'agent-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'agent-create' == request()->path() ? 'display: block' : '' }} {{ 'agents' == request()->path() ? 'display: block' : '' }}">
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


                <li class="submenu">
                    <a href="#"
                       class="{{ 'social-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'socials' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'social-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-icons"></i>
                        <span> Social </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'social-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'social-create' == request()->path() ? 'display: block' : '' }} {{ 'socials' == request()->path() ? 'display: block' : '' }}">
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

                <li class="submenu">
                    <a href="#"
                       class="{{ 'contact-edit/'.request()->route('id') == request()->path() ? 'menu_active subdrop' : '' }} {{ 'contacts' == request()->path() ? 'menu_active subdrop' : '' }} {{ 'contact-create' == request()->path() ? 'menu_active subdrop' : '' }}">
                        <i class="fa-solid fa-address-book"></i>
                        <span> Contact </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class"
                        style="{{ 'contact-edit/'.request()->route('id') == request()->path() ? 'display: block' : '' }} {{ 'contact-create' == request()->path() ? 'display: block' : '' }} {{ 'contacts' == request()->path() ? 'display: block' : '' }}">
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
