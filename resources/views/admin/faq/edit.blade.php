@extends('layouts.adminbase')

@section('title', 'Edit FAQ:' .$data->title)

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection


@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Edit FAQ</li>

            </ol>
        </div>
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Edit FAQ</h3>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <h2 class="pageheader-title">Edit FAQ: {{$data->title}} </h2>


                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">FAQ Elements</h4>
                    </div>

                    <form class="forms-sample" action="{{route('admin.faq.update' , ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Question</label>
                                <input type="text" class="form-control" name="question" value="{{$data->question}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Answer</label>
                                <textarea type="text" class="form-control" id='answer' name="answer">
                                    {{$data->answer}}

                                </textarea>

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
                @section('foot')
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

                    <script>
                        $(function () {
                            // Summernote
                            $('.textarea').summernote()
                        })
                    </script>
@endsection

