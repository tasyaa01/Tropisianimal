@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Gallery
                        <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div> <br>

                    <div class="row row-cols-1 row-cols-md-3">
                    @foreach ($gallery as $data)
                        <div class="col mb-4 container">
                            <div class="card border-0 mb-2">
                                <img class="card-img-top" src="{{ $data->image() }}" style="height:220px"><br>
                            <div class="container">
                            <form action="{{ route('galeri.destroy', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('galeri.edit', $data->id) }}"
                                    class="btn btn-sm btn-outline-success">
                                    Edit
                                </a> |
                                <a href="{{ route('galeri.show', $data->id) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    Show
                                </a> |
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Apakah Anda Yakin?')">Delete
                                </button>
                            </form>
                        </div>
                        </div><br>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection