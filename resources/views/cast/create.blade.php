@extends('adminlte.master')

@section('content')
    <div class="card-header">
    <h3 class="card-title">Create Cast</h3>
  </div>
<form role="form" action="/cast" method="post">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">id</label>
        <input type="text" class="form-control" id="id" name="id" placeholder="id">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">umur</label>
        <input type="text" class="form-control" id="umur" name="umur" placeholder="umur">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">bio</label>
        <input type="text" class="form-control" id="bio" name="bio" placeholder="bio">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection