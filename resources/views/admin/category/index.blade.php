@extends('layouts.adminbase')

@section('title' , 'Category List')

@section('content')



    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Category List</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

        <div class="card">
            <h5 class="card-header">Category List</h5>
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
                            <td><a href="/admin/category/delete/{{$rs->id}}"class="btn btn-danger btn-sm" >Delete</a> </td>
                            <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success btn-sm">Show</a> </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
@endsection
