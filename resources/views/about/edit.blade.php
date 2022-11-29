@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        About
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ $about->judul }}">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sub Judul</label>
                                <input type="text" class="form-control  @error('subjudul') is-invalid @enderror"
                                    name="subjudul" value="{{ $about->subjudul }}">
                                @error('subjudul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control  @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ $about->deskripsi }}">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Visi</label>
                                <input type="text" class="form-control  @error('visi') is-invalid @enderror"
                                    name="visi" value="{{ $about->visi }}">
                                @error('visi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Misi</label>
                                <input type="text" class="form-control  @error('misi') is-invalid @enderror"
                                    name="misi" value="{{ $about->misi }}">
                                @error('misi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection