@extends('layouts.adminbase')

@section('title', 'Add Job')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Add Job</li>

            </ol>
        </div>
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Job</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <h2 class="pageheader-title">Add Job </h2>

                <br>
                </br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job Elements</h4>
                    </div>

                    <form role="form" action="{{route('admin.job.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent Job</label>

                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    @foreach($data as $rs)
                                        <option value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                                    @endforeach
                                </select>
                            </div>
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
                                <label for="exampleInputEmail1">Salary</label>
                                <input type="number" class="form-control" name="salary" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Minage</label>
                                <input type="number" class="form-control" name="minage" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Maxage</label>
                                <input type="number" class="form-control" name="maxage" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Experience</label>
                                <input type="text" class="form-control" name="experience" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail Inf.</label>
                                <textarea class="form-control" id="detail" name="detail">

                                </textarea>

                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="file-upload-default">

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
