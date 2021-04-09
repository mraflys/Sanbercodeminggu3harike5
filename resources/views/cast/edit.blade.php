@extends('adminlte.master')

@section('content')
    <div class="card-header">
    <h3 class="card-title">Edit Cast {{$cast->id}}</h3>
  </div>
<form role="form" action="/cast/{{$cast->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">id</label>
        <input type="text" class="form-control" id="id" name="id" Value="{{old('id', $cast -> id)}}" placeholder="id">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" Value="{{old('nama', $cast -> nama)}}" placeholder="nama">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">umur</label>
        <input type="text" class="form-control" id="umur" name="umur" Value="{{old('umur', $cast -> umur)}}" placeholder="umur">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">bio</label>
        <input type="text" class="form-control" id="bio" name="bio" Value="{{old('bio', $cast -> bio)}}" placeholder="bio">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection