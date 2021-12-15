@extends('components/sidebar')

@section('product-gallery.index')
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
                        <h1>Foto Produk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="active">Foto Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="orders">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List Foto Produk</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Foto</th>
                                    <th>Default</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>{{$gallery->product->name}}</td>
                                    <td><img src="{{url($gallery->photo)}}" alt=""></td>
                                    <td>{{$gallery->is_default ? 'Ya' : 'Tidak'}}</td>
                                    <td>
                                        <form action="{{route('product-gallery.destroy', $gallery->id)}}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data not found
                                    </td>
                                </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection