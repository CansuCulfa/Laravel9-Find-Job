@extends('layouts.adminbase')

@section('title', 'Edit Job: {{$data->title}}')



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Edit Job</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Edit Job</li>

            </ol>
        </div>
        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <h2 class="pageheader-title">Edit Job: {{$data->title}} </h2>


                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job Elements</h4>
                    </div>

                    <form class="forms-sample" action="{{route('admin.job.update' , ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                                    @endforeach
                                </select>
                            </div>
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
                                <label for="exampleInputEmail1">Salary</label>
                                <input type="number" class="form-control" name="salary" value="{{$data->salary}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Minage</label>
                                <input type="number" class="form-control" name="minage" value="{{$data->minage}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Maxage</label>
                                <input type="number" class="form-control" name="maxage" value="{{$data->maxage}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Experience</label>
                                <input type="text" class="form-control" name="experience" value="{{$data->experience}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail Inf.</label>
                                <textarea type="text" class="form-control" name="detail">
                                    {{$data->detail}}

                                </textarea>
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
