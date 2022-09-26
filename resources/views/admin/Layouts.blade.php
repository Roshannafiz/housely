<!--------- Include Head File ---------->
@include('admin.include._head')

<body>
<div class="main-wrapper">
    <!--------- Include Top bar File ---------->
@include('admin.include._topbar')

<!--------- Include Left Sidebar File ---------->
    @include('admin.include._left-sidebar')

    <div class="page-wrapper">
        <!--*** admin Body Content ***-->
    @yield('admin_content')
    <!--*** admin Body Content ***-->
    </div>
</div>
<!--------- Include Script File --------->
@include('admin.include._script')

</body>
