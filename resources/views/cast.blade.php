@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Cast Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">id</th>
            <th>nama</th>
            <th>umur</th>
            <th>bio</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($cast as $key => $cas)
                <tr>
                    <td>{{$cas->id}}</td>
                    <td>{{$cas->nama}}</td>
                    <td>{{$cas->umur}}</td>
                    <td>{{$cas->bio}}</td>
                    <td style="display: flex;">
                        <a href="/cast/{{$cas->id}}" class="btn btn-info btn-sm">Show</a>
                        <a href="/cast/{{$cas->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                        <form action="/cast/{{$cas->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection