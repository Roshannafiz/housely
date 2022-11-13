<!----------- include Head File ----------->
@include('frontend.include._head')

<!----------- include Navbar File ----------->
@include('frontend.include._navbar')

<!-- Main Content -->
<div class="container-fluid p-0">
    @yield('frontend_content')
</div>
<!-- Main Content -->

<!------------ include Client Review File --------->
@include('frontend.include._footer')

<!------------ include Switcher File --------->
@include('frontend.include._switcher')

<!-------------- include Back To Top File ------------>
@include('frontend.include._back-to-top')

<!-------------- include Script File ------------>
@include('frontend.include._script')
