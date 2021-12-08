@extends('layouts.dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Produk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('product.index') }}">Produk</a></li>
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
                        <strong>Form Tambah Produk</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('product.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Nama Produk</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="category" class=" form-control-label">Kategori Produk</label>
                                <input type="text" id="category" name="category" value="{{ old('category') }}"
                                    class="form-control @error('category') is-invalid @enderror">
                                @error('category') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class=" form-control-label">Deskripsi Produk</label>
                                <textarea type="text" id="description" name="description"
                                    class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="price" class=" form-control-label">Harga Produk</label>
                                <input type="number" id="price" name="price" value="{{ old('price') }}"
                                    class="form-control @error('price') is-invalid @enderror">
                                @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="quantity" class=" form-control-label">Jumlah Produk</label>
                                <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}"
                                    class="form-control @error('quantity') is-invalid @enderror">
                                @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
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