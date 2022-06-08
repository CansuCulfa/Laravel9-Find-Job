@extends('layouts.frontbase')

@section('title', 'User Login | ')


@section('content')
   <!--  BREADCUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">User Login</li>
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
                  @include('auth.login')
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </div>


@endsection
