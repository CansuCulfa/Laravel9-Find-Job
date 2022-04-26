@extends('layouts.adminbase')

@section('title', 'Edit Category: {{$data->title}}')



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Edit Category</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Edit Category</li>

            </ol>
        </div>
        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <h2 class="pageheader-title">Edit Category: {{$data->title}} </h2>


                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category Elements</h4>
                    </div>

                    <form class="forms-sample" action="{{route('admin.category.update' , ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="file-upload-default">
                               
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary me-2">Update Data</button>
                            </div>
                        </div>
                    </form>
                </div>










@endsection
