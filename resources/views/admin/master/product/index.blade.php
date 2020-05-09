@extends('template.app')

@section('pagetitle','Master User')

@section('customcss')
<link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}">
@endsection

@section('content')
<!-- Default box -->
<div class="box box-primary">
    <div class="box-body">
        <div class="table">
            <table class="table table-striped table-hover table-responsive" id="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index=>$item)
                        <tr>
                            <td>{{ $index + $products->firstItem() }}</td>
                            <td>{{ ucfirst($item->product) }}</td>
                            <td>{{ "Rp. ".number_format($item->price,0,'.','.') }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>-</td>
                            <td>Detail | Update | Hapus</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pull-right">
            </div>
        </div>
    </div>
</div>
<!-- /.box-body -->
@endsection
