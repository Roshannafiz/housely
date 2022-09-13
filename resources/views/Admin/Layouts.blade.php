<!-------- *** Include Head File *** ----------->
@include('admin.include._head')

<body>
<div class="container-scroller">
    <!--------- *** Include Top-Bar File *** ----------->
    @include('admin.include._topbar')

    <div class="container-fluid page-body-wrapper">
        <!--------- *** Include Left Sidebar / Navbar File *** ----------->
        @include('admin.include._navbar')

        <!------ Main Content -------->
        @yield('admin_content')
        <!------ Main Content -------->

    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!----------- *** Include Head File *** ------------>
@include('admin.include._script')
