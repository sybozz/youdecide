@extends('layouts.website')
@section('title', 'How it works')

@section('mainContent')

    <div id="home" class="full-section parallax-home">
        <div class="slider-caption">
            <h1> Are You Looking for help ? </h1>
            <h2> <span>Join  Our Community</span></h2>
            <a class="btn btn-transparent" href="{{ url('/register') }}"> Join Now </a> <a class="btn btn-light" href="{{ url('/listing') }}"> Start Browsing </a> </div>
    </div>

    <section class="custom-padding" id="how-it-work">
        <div class="container">
            <!-- title-section -->
            <div class="main-heading text-center">
                <h2>How  It Works </h2>
                <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
                </div>
                <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi
                    <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
            </div>

            <!-- End title-section -->

            <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12  center-responsive"> <img src="{{ asset('website') }}/images/step1.png" class="img-responsive" alt="">
                    <h4><a href="#">Create An Account</a></h4>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="{{ asset('website') }}/images/step2.png" class="img-responsive" alt="">
                    <h4><a href="#">Post Your Question</a></h4>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="{{ asset('website') }}/images/step3.png" class="img-responsive" alt="">
                    <h4><a href="#"> Find Your Solution</a></h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end container -->
    </section>

@endsection