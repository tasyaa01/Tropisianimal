@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Berita
                        <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>  

                    <div class="container pt-5">
                        <div class="row pb-3 container">
                            @foreach ($berita as $data)
                                <div class="col-lg-4 mb-5 container">
                                    <div class="card border-0 mb-2">
                                        <img class="card-img-top" src="{{ $data->image() }}" style="height:210px">
                                        <div class="card-body p-3">
                                            <p class="card-title"><h5>{{ $data->judul }}</h5></p>
                                            <p class="card-text">{{ $data->subjudul }}</p>
                                        </div>
                                        <div class="container">
                                            <form action="{{ route('berita.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('berita.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('berita.show', $data->id) }}"
                                                    class="btn btn-sm btn-outline-warning">
                                                    Show
                                                </a> |
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection