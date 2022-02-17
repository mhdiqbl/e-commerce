@extends('layouts.admin')

@section('content')
    <div class="content">
        <form action="{{ route('barang.store') }}" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="name" name="nama" value="{{ old('nama') }}" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" name="type" value="{{ old('type') }}" class=" form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" id="price" name="price" value="{{ old('price') }}" class="form-control"
                    placeholder="">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" id="quantity" name="quantity" value="{{ old('quantity') }}" class="form-control"
                    placeholder="">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" value="{{ old('description') }}" cols="30" rows="10"
                    class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-dark form-control">Tambah</button>
            </div>
        </form>
    </div>
@endsection
