@extends('layouts.adminwindows')

@section('title', 'Show Messages :' .$data->title)



@section('content')


        <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">

                <br>
                </br>
                    <div class="card">
                        <h5 class="card-header">Detail Message Data</h5>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Job</th>
                                    <td>{{$data->job->title}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>

                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Review</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
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
                                    <th>Admin Note :</th>
                                    <td>
                                        <form class="forms-sample" action="{{route('admin.comment.update' , ['id'=>$data->id])}}" method="post" >
                                            @csrf
                                      <select name="status">
                                          <option selected>{{$data->status}}</option>
                                          <option>True</option>
                                          <option>False</option>
                                      </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary me-2">Update Comment</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>







@endsection
