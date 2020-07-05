@extends('layouts.master')
@section('title')
   Edit
@endsection
@section('content')
<form action="/artikel/{{$data['0']->idartikles}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="slug">Slug</label>
            <input value="{{$data['0']->slug}}" name="slug" type="text" required  class="form-control" id="slug">
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input value="{{$data['0']->judul}}" name="judul" type="text" required class="form-control" id="judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" required name="isi" rows="5" id="isi">{{$data['0']->tag}}</textarea>
        </div>
        <div class="form-group">
            <label for="tag">tag</label>
            <input value="{{$data['0']->tag}}" name="tag" type="text" required class="form-control" id="tag">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
