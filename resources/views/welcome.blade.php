@extends('layouts.master')
@section('title')
    ERD
@endsection
@section('judul')
    ERD Blog
@endsection
@section('content')
    <img src="{{asset('ERD_BLOG.png')}}" alt="">
@endsection
@push('script')
    <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush