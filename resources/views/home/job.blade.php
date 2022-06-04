@extends('layouts.frontbase')

@section('title',$data->title)


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div>
                        <br>

                        <img src="{{Storage::url($data->image)}}" alt="" class="img-responsive wc-image">

                        <br>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-xs-12">
                    <form action="#" method="post" class="form">
                        <h2>{{$data->title}}</h2>

                        <p class="lead"><strong class="text-primary">₺ {{$data->salary}}</strong> <small> per month</small></p>

                        <p class="lead">
                            <i class="fa fa-briefcase"></i> {{$data->description}} &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-calendar"></i> 20-06-2020 &nbsp;&nbsp;
                            <i class="fa fa-file"></i> Contract
                        </p>


                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Job Description</h4>
                </div>

                <div class="panel-body">
                   {!!$data->detail !!}
                </div>
            </div>


            <div class="clearfix">
                <a href="#" class="section-btn btn btn-primary pull-left">Apply for this job</a>

                <ul class="social-icon pull-right">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-envelope-o"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </section>

@endsection
