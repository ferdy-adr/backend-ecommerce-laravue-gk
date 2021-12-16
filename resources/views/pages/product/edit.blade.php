@extends('components/sidebar')

@section('product.index')
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
            <h1>Edit Data Produk</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li><a href="{{ route('product.index') }}">Produk</a></li>
              <li class="active">Edit Data</li>
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
            <strong>Form Edit Produk</strong>
          </div>
          <div class="card-body card-block">
            <form action="{{route('product.update', $data->id)}}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label for="name" class=" form-control-label">Nama Produk</label>
                <input type="text" id="name" name="name" value="{{old('name') ? old('name') : $data->name}}"
                  class="form-control @error('name') is-invalid @enderror">
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="categories_id" class=" form-control-label">Kategori Produk</label>
                <select type="text" id="categories_id" name="categories_id"
                  class="form-control @error('categories_id') is-invalid @enderror">
                  @foreach ($category as $item)

                  <option value="{{$item->id}}" @if ($item->id == $data->categories_id)
                    selected
                    @endif>{{$item->name}}</option>

                  @endforeach
                </select>
                @error('categories_id') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="description" class=" form-control-label">Deskripsi Produk</label>
                <textarea type="text" id="description" name="description"
                  class="form-control @error('description') is-invalid @enderror">{{old('description') ? old('description') : $data->description}}</textarea>
                @error('description') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="price" class=" form-control-label">Harga Produk</label>
                <input type="number" id="price" name="price" value="{{old('price') ? old('price') : $data->price}}"
                  class="form-control @error('price') is-invalid @enderror">
                @error('price') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="quantity" class=" form-control-label">Jumlah Produk</label>
                <input type="number" id="quantity" name="quantity"
                  value="{{old('quantity') ? old('quantity') : $data->quantity}}"
                  class="form-control @error('quantity') is-invalid @enderror">
                @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <hr>
              <div class="form-actions form-group">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>
                  Simpan</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection