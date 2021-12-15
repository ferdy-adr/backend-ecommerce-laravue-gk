@extends('components.sidebar')

@section('product-gallery.create')
active
@endsection


@extends('layouts.dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Foto Produk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('product-gallery.index') }}">Foto Produk</a></li>
                            <li class="active">Tambah Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="forms">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Form Tambah Foto Produk</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('product-gallery.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="products_id" class=" form-control-label">Nama Produk</label>
                                <select type="text" id="products_id" name="products_id"
                                    class="form-control @error('products_id') is-invalid @enderror">
                                    <option value="" selected>-- Pilih Produk --</option>
                                    @foreach ($product as $item)

                                    <option value="{{$item->id}}">{{$item->name}}</option>

                                    @endforeach
                                </select>
                                @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label for="photo" class=" form-control-label">Foto Produk</label>
                                <input type="file" id="photo" name="photo" value="{{ old('photo') }}" accept="image/*"
                                    class="form-control @error('photo') is-invalid @enderror">
                                @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label for="is_default" class=" form-control-label">Jadikan Gambar Default</label>
                                <br>
                                <div class="form-check form-check-inline mr-4">
                                    <input class="form-check-input @error('is_default') is-invalid @enderror"
                                        type="radio" name="is_default" id="is_default1" value="1">
                                    <label class="form-check-label" for="is_default1"> Ya</label>
                                </div>
                                <div class="form-check form-check-inline mr-4">
                                    <input class="form-check-input @error('is_default') is-invalid @enderror"
                                        type="radio" name="is_default" id="is_default2" value="0">
                                    <label class="form-check-label" for="is_default2"> Tidak</label>
                                </div>
                                @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>
                                    Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-refresh"></i>
                                    Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection