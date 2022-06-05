@extends('layouts.adminbase')

@section('title' , 'Contact Form Message List')

@section('content')



    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Message List</li>

                    </ol>
            </div>
        </div>
        <!-- ============================================================== -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Message List</h3>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <th>
                    <th style="width: 10px">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Status</th>
                    <th style="width: 40px">Show</th>
                    <th style="width: 40px">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th scope="row">{{$rs->id}}</th>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}} </td>
                            <td>{{$rs->phone}} </td>
                            <td>{{$rs->email}} </td>
                            <td>{{$rs->subject}} </td>
                            <td>{{$rs->status}} </td>
                            <td>

                                <a href="{{route('admin.message.show' , ['id'=>$rs->id])}}" class="btn btn-success btn-sm"
                                   onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700' )">
                                    Show
                                </a>
                            </td>
                            <td><a href="{{route('admin.message.destroy' , ['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Deleting !! Are You Sure?')">Delete</a> </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul>
@endsection
