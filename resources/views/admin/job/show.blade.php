@extends('layouts.adminbase')

@section('title', 'Show Job: {{$data->title}}')



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Show Job</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Show Job</li>

            </ol>
        </div>
        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <a href="{{route('admin.job.edit' , ['id'=>$data->id])}}" class="btn btn-rounded btn-dark" style="width: 150px">Edit</a>
                <a href="{{route('admin.job.destroy' , ['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are You Sure?')" class="btn btn-rounded btn-dark" style="width: 150px">Delete</a>

                <br>
                </br>
                    <div class="card">
                        <h5 class="card-header">Detail</h5>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{$data->category_id}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th>Salary</th>
                                    <td>{{$data->salary}}</td>
                                </tr>
                                <tr>
                                    <th>Minimum Age</th>
                                    <td>{{$data->minage}}</td>
                                </tr>
                                <tr>
                                    <th>Maximum Age</th>
                                    <td>{{$data->maxage}}</td>
                                </tr>
                                <tr>
                                    <th>Experience</th>
                                    <td>{{$data->experience}}</td>
                                </tr>
                                <tr>
                                    <th>Detail Inf.</th>
                                    <td>{{$data->detail}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                        @endif </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>







@endsection
