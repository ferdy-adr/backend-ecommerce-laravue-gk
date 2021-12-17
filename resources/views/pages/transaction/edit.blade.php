@extends('components/sidebar')

@section('transaction.index')
active
@endsection

@extends('layouts.dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-8">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Edit Data Transaksi <small>"{{$data->uuid}}"</small></h1>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li><a href="{{ route('transaction.index') }}">Transaksi</a></li>
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
            <strong>Form Edit Transaksi</strong>
          </div>
          <div class="card-body card-block">
            <form action="{{route('transaction.update', $data->id)}}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label for="name" class=" form-control-label">Nama Pemesan</label>
                <input type="text" id="name" name="name" value="{{old('name') ? old('name') : $data->name}}"
                  class="form-control @error('name') is-invalid @enderror">
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="email" class=" form-control-label">Email</label>
                <input type="email" id="email" name="email" value="{{old('email') ? old('email') : $data->email}}"
                  class="form-control @error('email') is-invalid @enderror">
                @error('email') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="number" class=" form-control-label">No. Telepon</label>
                <input type="text" id="number" name="number" value="{{old('number') ? old('number') : $data->number}}"
                  class="form-control @error('number') is-invalid @enderror">
                @error('number') <div class="text-muted">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="address" class=" form-control-label">Alamat</label>
                <input type="text" id="address" name="address"
                  value="{{old('address') ? old('address') : $data->address}}"
                  class="form-control @error('address') is-invalid @enderror">
                @error('address') <div class="text-muted">{{ $message }}</div> @enderror
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