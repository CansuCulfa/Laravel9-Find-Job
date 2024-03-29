@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews ')

@section('content')
    <!--  BREADCUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"> User Comment </li>
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
                    <div class="col-md-2">
                        <div class="billing-details">
                            <div class="section-title">
                            <h3 class="title"> User Menu </h3>
                            </div>
                            @include('home.user.usermenu')
                        </div>
                    </div>



                    <div class="col-md-10">
                            <div class="shipping-methods">
                                <div class="section-title">
                                    <h4 class="title"> User Comments & Reviews </h4>
                                </div>
                            <div class="input-checkbox">
                                <table class="table table-striped">
                                    <thead>
                                    <th>
                                    <th style="width: 10px">Id</th>
                                    <th scope="col">Job</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Review</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Status</th>

                                    <th style="width: 40px">Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('job',['id'=>$rs->job_id])}}">
                                                    {{$rs->job->title}} </a>
                                            </td>
                                           
                                            <td>{{$rs->subject}} </td>
                                            <td>{{$rs->review}} </td>
                                            <td>{{$rs->rate}} </td>
                                            <td>{{$rs->status}} </td>

                                            <td><a href="{{route('userpanel.reviewdestroy' , ['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Deleting !! Are You Sure?')">Delete</a> </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                            </div>
                    </div>

            <!-- /row -->
        </div>
        <!-- /container-->
    </div>


@endsection
