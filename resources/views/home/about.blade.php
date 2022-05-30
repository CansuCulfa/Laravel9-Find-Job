@extends('layouts.frontbase')

@section('title', 'About Us | '. $setting->title)
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
                <div class="col-md-12">
                    {!! $setting->aboutus !!}
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </div>


@endsection
