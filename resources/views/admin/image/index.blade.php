@extends('layouts.adminwindows')

@section('title' , 'Job Image Gallery')

@section('content')

    <h3> {{$job->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['jid'=>$job->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
            </div>
            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="Upload">
            </div>
        </div>

    </form>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Job Image List</h3>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <th>
                    <th scope="col">Id</th>

                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th style="width: 40px">Update</th>
                    <th style="width: 40px">Delete</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr>
                            <th scope="row">{{$rs->id}}</th>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}} </td>
                            <td>
                                @if ($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                @endif
                            </td>

                            <td><a href="{{route('admin.image.destroy' , ['jid'=>$job->id ,'id'=>$rs->id])}}"class="btn btn-danger btn-sm"
                            onclick="return confirm('Deleting !! Are You Sure?')">Delete</a> </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul>
        </div>
    </div>
@endsection
