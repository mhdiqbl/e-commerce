@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h4 class="box-title">Daftar Produk Terbaru </h4>
            </div>
            <div class="card-body--">
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="serial">1.</td>
                                    <td> <span class="name">{{ $product->nama }}</span> </td>
                                    <td> <span class="product">{{ $product->type }}</span> </td>
                                    <td><span class="count">{{ $product->price }}</span></td>
                                    <td><span class="count">{{ $product->quantity }}</span></td>
                                    <td>
                                        <a href="{{ route('barang.edit', $product->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('barang.destroy', $product->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center h3">DATA MASIH KOSONG</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div> <!-- /.table-stats -->
            </div>
        </div>
    </div>
@endsection
