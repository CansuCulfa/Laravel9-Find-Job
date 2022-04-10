@extends('layouts.adminbase')

@section('title' , 'Add Category')

@section('content')

    <!-- partial -->

        <div class="page-header">
            <h3 class="page-title"> Category Elements </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin"></a>Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
            </nav>
        </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description"> Basic form layout </p>
                <form class="forms-sample" action="/admin/category/store" method="post">
                    @csrf
                    <input type="hidden" name="_token" value="Jh4SWSZGPqLOtvfYc06PNDj3foQDQly56YuXhTuj">                        <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                </form>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <button class="btn btn-dark">Cancel</button>
                </div>






            </div>
        </div>
    </div>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
    </div>
    <!-- content-wrapper ends -->

@endsection
