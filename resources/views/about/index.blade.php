@extends('layouts.admin')
@section('content') 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        About Us
                        <a href="{{ route('about.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>  

                    <div class="container pt-5">
                        <div class="row pb-3 container">
                            @foreach ($about as $data)
                            <div class="col-lg-6 pb-5 pb-lg-0 px-3 px-lg-7">
                                    <h1>{{ $data->judul }}</h1>
                                    <h5 class="text-muted mb-3">{{ $data->subjudul }}</h5>
                                    <p class="mb-4">{{ $data->deskripsi }}</p>
                                <br>
                            </div>
                            <div class="col-lg-6 pb-5 pb-lg-0 px-3 px-lg-7">
                                <h2>VISI</h2>
                                <P class="mb-4">{{ $data->visi }}</P>
                                <br>
                                <H2>MISI</H2>
                                <P class="mb-4">{{ $data->misi }}</P>
                            </div>
                            <div class="container">
                                <form action="{{ route('about.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('about.edit', $data->id) }}"
                                        class="btn btn-sm btn-outline-success">
                                        Edit
                                    </a> |
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                    </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection