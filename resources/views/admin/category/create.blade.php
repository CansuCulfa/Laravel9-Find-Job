@extends('layouts.adminbase')

@section('title', 'Add Category')



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Category</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Add Category</li>

            </ol>
        </div>

        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <h2 class="pageheader-title">Add Category </h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                        </ol>
                    </nav>
                </div>

                <br>
                </br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category Elements</h4>
                    </div>

                    <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="file-upload-default" name="img[]" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled=""  placeholder="Upload Image">

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary me-2" value="Save">
                            </div>
                        </div>
                    </form>
                </div>

@endsection
