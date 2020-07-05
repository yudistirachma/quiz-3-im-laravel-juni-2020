@extends('layouts.master')
@section('title')
    Create
@endsection
@section('judul')
    Create
@endsection
@section('content')
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input name="judul" type="text" required class="form-control" id="judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" required name="isi" rows="5" id="isi"></textarea>
        </div>
        <div class="form-group">
            <label for="tag">tag</label>
            <input name="tag" type="text" required class="form-control" id="tag">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection