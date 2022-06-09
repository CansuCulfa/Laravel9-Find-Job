@extends('layouts.adminwindows')

@section('title', 'Show User :' .$data->title)



@section('content')


        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">

                <br>
                </br>
                    <div class="card">
                        <h5 class="card-header">Detail User Data</h5>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole' , ['uid'=>$data->id , 'rid'=>$role->id])}}" class="btn btn-danger btn-sm"
                                               onclick="return confirm('Deleting !! Are You Sure?')">[x]</a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Add Role to User</th>
                                    <td>
                                        <form class="forms-sample" action="{{route('admin.user.addrole' , ['id'=>$data->id])}}" method="post" >
                                            @csrf
                                            <select name="role">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach

                                            </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary me-2">Add Role</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>







@endsection
