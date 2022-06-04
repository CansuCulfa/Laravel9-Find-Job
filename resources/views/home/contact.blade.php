@extends('layouts.frontbase')

@section('title', 'Contact Us | '. $setting->title)
@section('description',  $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!--  BREADCUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!--  /BREADCUMB -->

    <!--  section-->
    <div class="section">
        <!--  container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <section>
                    <div class="container">
                        <div class="text-center">
                            <h1>Contact Us</h1>

                            <p class="lead">We love conversations. Let us talk! </p>
                        </div>
                    </div>
                </section>

                <section id="contact">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 col-sm-12">
                                <form id="contact-form" role="form" action="" method="post">
                                    <div class="col-md-12 col-sm-12">
                                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

                                        <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                        <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                        <input type="submit" class="form-control" name="send message" value="Send Message">
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="contact-image">
                                    <img src="{{asset('assets')}}/images/contact-1-600x400.jpg" class="img-responsive" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="contactus">
                    <div class="container">
                        <div class="row">
                            {!! $setting->contact !!}
                        </div>
                    </div>
                </section>

            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </div>


@endsection
