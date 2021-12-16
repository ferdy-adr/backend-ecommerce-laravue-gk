@extends('components/sidebar')

@section('transaction.index')
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
                        <h1>Transaksi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="active">Transaksi</li>
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
                        <strong class="card-title">Daftar Transaksi</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Total Transaksi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td class="serial">{{ $item->id }}.</td>
                                    <td> <span class="name">{{ $item->name }}</span> </td>
                                    <td style="text-transform: lowercase">{{ $item->email }}</td>
                                    <td>{{ $item->number }}</td>
                                    <td>$ {{ $item->transaction_total }}</td>
                                    <td><span class="
                                        @if ($item->transaction_status == 'PENDING')badge badge-info
                                        @elseif ($item->transaction_status == 'SUCCESS')badge badge-success
                                        @elseif ($item->transaction_status == 'FAILED')badge badge-danger
                                        @else
                                        @endif
                                            ">{{$item->transaction_status}}</span>
                                    </td>
                                    <td>
                                        @if ($item->transaction_status == 'PENDING')

                                        {{-- <a href="{{route('transaction.status', $item->id)}}?status=SUCCESS"
                                            class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                        </a>

                                        <a href="{{route('transaction.status', $item->id)}}?status=FAILED"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-times"></i>
                                        </a> --}}

                                        @endif
                                        <a href="#mymodal" data-remote="{{route('product.edit', $item->id)}}"
                                            data-toggle="modal" data-target="#mymodal"
                                            data-title="Detail Transaksi {{$item->uuid}}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('product.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{route('product.destroy', $item->id)}}" method="POST"
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