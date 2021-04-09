@extends('adminlte.master')

@section('content')
    <div class="card-header">
    <h3 class="card-title">Detail Cast</h3>
  </div>
<div class="mt-3 ml-3">
    <p>Id : {{$cast->id}}</p>
    <p>Nama : {{$cast->nama}}</p>
    <p>Umur : {{$cast->umur}}</p>
    <p>bio : {{$cast->bio}}</p>
</div>

@endsection