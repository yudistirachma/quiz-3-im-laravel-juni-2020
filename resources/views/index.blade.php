@extends('layouts.master')
@section('title')
    Artikel
@endsection
@section('judul')
    Artikel
@endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($data as $key => $item)        
        <th scope="row">{{$key +1}}</th>
        <td>{{$item->judul}}</td>
        <td>
            {{$item->isi}}
        </td>
        <td>
          <a href="artikel/{{$item->idartikles}}" class="btn btn-info">detail</a>
          <a href="artikel/{{$item->idartikles}}/edit" class="btn btn-warning">edit</a>
          <form action="artikel/{{$item->idartikles}}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger">hapus</button>
          </form>
        </td>
    </tr>
        @endforeach
  </tbody>
</table>
@endsection
@push('scripts')
    <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Data di tampilkan',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush