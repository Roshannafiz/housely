@section('title') {{ 'Home' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <!----------- include Home Slider File ---------->
    @include('frontend.include._home-slider')
    <section class="relative lg:py-24 py-16">
        <!------------- include  Transparency Control File ------------->
        @include('frontend.include._transparency-control')

        <!------------- include How To Work File ------------->
        @include('frontend.include._how-to-work')

        <!------------- include Featured Properties File ------------->
        @include('frontend.include._featured-properties')
    </section>
    <!------------- include CTA File ------------->
    @include('frontend.include._cta')

    <!------------ include Business Logo File --------->
    @include('frontend.include._business-logo')

    <!------------ include Client Review File --------->
    @include('frontend.include._client-review')
@endsection
