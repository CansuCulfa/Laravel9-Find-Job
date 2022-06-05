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
                    @include('home.messages')
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

            <div class="col-md-6">
                <div class="job-reviews">
                    @foreach($reviews as $rs)
                <div class="single-review">
                    <div class="review-heading">
                        <div><a href="#"> <i class="fa fa-user-o"></i> {{$rs->user->name}}</a></div>
                        <div><a href="#"> <i class="fa fa-clock-o"></i> {{$rs->created_at}}</a></div>
                        <div class="review-rating pull-right">
                            <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                            <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>
                        </div>
                    </div>
                    <div class="review-body">
                        <strong>{{$rs->subject}}</strong>
                        <p>{{$rs->review}}</p>
                    </div>
                </div>
                    @endforeach
            </div>
            </div>












            <div class="col-md-6">
                <h4 class="text-uppercase">Write Your Review</h4>
                <p>Your e-mail adresses wil not be published</p>

                <form class="review-form" action="{{route('storecomment')}}" method="post">
                    @csrf
                    <input class="input" type="hidden" value="{{$data->id}}"/>
                    <div class="form-group">
                        <input class="input" type="text" name="subject" placeholder="Subject"/>
                    </div>
                    <div class="form-group">
                        <textarea class="input" name="review" placeholder="Your review"></textarea>
                    </div>

                    <div class="form-group">

                        <div class="input-rating">
                            <strong class="text-uppercase">Your Rating:</strong>

                            <div class="stars">
                                <input id="star5" type="radio" name="rate" value="5"> <label for="star5"> ★ </label>
                                <input id="star4" type="radio" name="rate" value="4"> <label for="star4"> ★ </label>
                                <input id="star3" type="radio" name="rate" value="3"> <label for="star3"> ★ </label>
                                <input id="star2" type="radio" name="rate" value="2"> <label for="star2"> ★ </label>
                                <input id="star1" type="radio" name="rate" value="1"> <label for="star1"> ★ </label>
                            </div>
                        </div>
                    </div>
                    @auth
                        <button class="primary-btn">Submit</button>
                    @else
                        <a href="/login" class="btn btn-primary btn-sm">For Submit Your Review, Please Login </a>
                    @endauth
                </form>

                </div>

            </div>
        </div>
    </section>

@endsection
