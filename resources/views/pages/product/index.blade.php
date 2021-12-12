@extends('layouts.dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Product</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="active">Product</li>
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
                        <strong class="card-title">List Product</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $product)
                                <tr>
                                    <td class="serial">{{ $product->id }}.</td>
                                    <td> <span class="name">{{ $product->name }}</span> </td>
                                    <td>{{ $product->categories_id }}</td>
                                    <td> <span class="product">{{ $product->price }}</span> </td>
                                    <td><span class="count">{{ $product->quantity }}</span></td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <i class="fa fa-picture-o"></i>
                                        </a>
                                        <a href="{{route('product.edit', $product->id)}}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{route('product.destroy', $product->id)}}" method="POST"
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