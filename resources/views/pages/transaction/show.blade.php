<table class="table table-bordered">
  <tr>
    <th>Name</th>
    <td>{{$item->name}}</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>{{$item->email}}</td>
  </tr>
  <tr>
    <th>No. Telepon</th>
    <td>{{$item->number}}</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>{{$item->address}}</td>
  </tr>
  <tr>
    <th>Total Transaksi</th>
    <td>$ {{$item->transaction_total}}</td>
  </tr>
  <tr>
    <th>Status Transaksi</th>
    <td>{{$item->transaction_status}}</td>
  </tr>
  <tr>
    <th>Pembelian Poduk</th>
    <td>
      <table class="table table-bordered w-100">
        <tr>
          <th>Nama</th>
          <th>Kategori</th>
          <th>Harga</th>
        </tr>
        <tr>
          @foreach ($item->transactionDetail as $items)
          <td>{{$items->product->name}}</td>
          <td>{{$items->product->category->name}}</td>
          <td>$ {{$items->product->price}}</td>
          @endforeach
        </tr>
      </table>
    </td>
  </tr>
</table>

<div class="row">
  <div class="col-4">
    <a href="{{route('transaction.status', $item->id)}}?status=SUCCESS" class="btn btn-success btn-block"><i
        class="fa fa-check"></i> Set Sukses</a>
  </div>
  <div class="col-4">
    <a href="{{route('transaction.status', $item->id)}}?status=FAILED" class="btn btn-danger btn-block"><i
        class="fa fa-times"></i> Set Gagal</a>
  </div>
  <div class="col-4">
    <a href="{{route('transaction.status', $item->id)}}?status=PENDING" class="btn btn-info btn-block"><i
        class="fa fa-spinner"></i> Set Pending</a>
  </div>
</div>