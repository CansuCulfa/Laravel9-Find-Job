@extends('layouts.adminbase')

@section('title' , 'Category List')

@section('content')



    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <a href="/admin/category/create" class="btn btn-rounded btn-dark" style="width: 200px">Add Category</a>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category List</h3>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <th>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Keywords</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th style="width: 40px">Edit</th>
                    <th style="width: 40px">Delete</th>
                    <th style="width: 40px">Show</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th scope="row">{{$rs->id}}</th>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-primary btn-sm">Edit</a> </td>
                            <td><a href="/admin/category/delete/{{$rs->id}}"class="btn btn-danger btn-sm"
                            onclick="return confirm('Deleting !! Are You Sure?')">Delete</a> </td>
                            <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success btn-sm">Show</a> </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
@endsection
