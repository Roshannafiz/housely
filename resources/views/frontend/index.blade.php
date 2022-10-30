@section('title') {{ 'Home' }} @endsection
<!----------- include Head File ----------->
@include('frontend.include._head')

<!----------- include Navbar File ----------->
@include('frontend.include._navbar')

<!----------- include Home Slider File ----------->
@include('frontend.include._home-slider')

<!-- Start -->
<section class="relative lg:py-24 py-16">

    <!------------- include  Transparency Control File ------------->
@include('frontend.include._transparency-control')

<!------------- include How To Work File ------------->
@include('frontend.include._how-to-work')

<!------------- include Featured Properties File ------------->
    @include('frontend.include._featured-properties')

</section>
<!--end section-->

<!------------- include CTA File ------------->
@include('frontend.include._cta')

<!------------ include Business Logo File --------->
@include('frontend.include._business-logo')

<!------------ include Client Review File --------->
@include('frontend.include._client-review')

<!------------ include Client Review File --------->
@include('frontend.include._footer')

<!------------ include Switcher File --------->
@include('frontend.include._switcher')

<!-------------- include Back To Top File ------------>
@include('frontend.include._back-to-top')

<!-------------- include Script File ------------>
@include('frontend.include._script')
