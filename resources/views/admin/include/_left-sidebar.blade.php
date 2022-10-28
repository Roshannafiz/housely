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



                <li class="submenu"><a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-rooms.html">All Rooms </a></li>
                        <li><a href="edit-room.html"> Edit Rooms </a></li>
                        <li><a href="add-room.html"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-staff.html">All Staff </a></li>
                        <li><a href="edit-staff.html"> Edit Staff </a></li>
                        <li><a href="add-staff.html"> Add Staff </a></li>
                    </ul>
                </li>
                <li><a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a></li>
                <li class="submenu"><a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="chat.html"><i class="fas fa-comments"></i><span> Chat </span></a></li>
                        <li class="submenu"><a href="#"><i class="fas fa-video camera"></i> <span> Calls </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="voice-call.html"> Voice Call </a></li>
                                <li><a href="video-call.html"> Video Call </a></li>
                                <li><a href="incoming-call.html"> Incoming Call </a></li>
                            </ul>
                        </li>
                        <li class="submenu"><a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="compose.html">Compose Mail </a></li>
                                <li><a href="inbox.html"> Inbox </a></li>
                                <li><a href="mail-veiw.html"> Mail Veiw </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="employees.html">Employees List </a></li>
                        <li><a href="leaves.html">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                        <li><a href="expenses.html">Expenses </a></li>
                        <li><a href="taxes.html">Taxes </a></li>
                        <li><a href="provident-fund.html">Provident Fund </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">Employee Salary </a></li>
                        <li><a href="salary-veiw.html">Payslip </a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a></li>
                <li class="submenu"><a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="blog.html">Blog </a></li>
                        <li><a href="blog-details.html">Blog Veiw </a></li>
                        <li><a href="add-blog.html">Add Blog </a></li>
                        <li><a href="edit-blog.html">Edit Blog </a></li>
                    </ul>
                </li>
                <li><a href="assets.html"><i class="fas fa-cube"></i> <span>Assests</span></a></li>
                <li><a href="activities.html"><i class="far fa-bell"></i> <span>Activities</span></a></li>
                <li class="submenu"><a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="expense-reports.html">Expense Report </a></li>
                        <li><a href="invoice-reports.html">Invoice Report </a></li>
                    </ul>
                </li>
                <li><a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
                <li class="list-divider"></li>
                <li class="menu-title mt-3"><span>UI ELEMENTS</span></li>
                <li class="submenu"><a href="#"><i class="fas fa-laptop"></i> <span> Components </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="uikit.html">UI Kit </a></li>
                        <li><a href="typography.html">Typography </a></li>
                        <li><a href="tabs.html">Tabs </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="fas fa-edit"></i> <span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="form-basic-inputs.html">Basic Input </a></li>
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html">Vertical Form </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="tables-basic.html">Basic Table </a></li>
                        <li><a href="tables-datatables.html">Data Table </a></li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <li class="menu-title mt-3"><span>EXTRAS</span></li>
                <li class="submenu"><a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="login.html">Login </a></li>
                        <li><a href="register.html">Register </a></li>
                        <li><a href="forgot-password.html">Forgot Password </a></li>
                        <li><a href="change-password.html">Change Password </a></li>
                        <li><a href="lock-screen.html">Lockscreen </a></li>
                        <li><a href="profile.html">Profile </a></li>
                        <li><a href="gallery.html">Gallery </a></li>
                        <li><a href="error-404.html">404 Error </a></li>
                        <li><a href="error-500.html">500 Error </a></li>
                        <li><a href="blank-page.html">Blank Page </a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="">Level 1 </a></li>
                        <li><a href="">Level 2 </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
