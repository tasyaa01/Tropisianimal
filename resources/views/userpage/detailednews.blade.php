@extends('layouts.user')
@section('content')
<!-- DETAIL BERITA START -->
<br>
<div class="mb-3">
    <div class="card-body">
        <img src="{{ $berita->image() }}" class="img-polaroid" style="width:250px; height: 250px; float:left; margin-right:10px;">
        <h5 class="card-title">{{ $berita->judul }}</h5>
        <p class="card-text" style="text-align:justify;">{{ $berita->isi }}</p>
        <a class="btn-solid-reg page-scroll" href="/news">KEMBALI</a>
    </div>
</div>
<br>
<!-- DETAIL BERITA END -->
@endsection