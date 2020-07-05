@extends('layouts.master')
@section('title')
   Detail
@endsection
@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$data['0']->judul}}</h5>
    <h6 class="card-title">Slug : {{$data['0']->judul}}</h6>
    <p class="card-text">{{$data['0']->isi}}</p>
    <a href="#" class="badge badge-success">{{$data['0']->tag}}</a>
  </div>
</div>
@endsection
