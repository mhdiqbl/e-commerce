@extends('layouts.admin')

@section('content')
    <div class="content">
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
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
                <label for="image" class="form-label">Product</label>
                <select name="barang_id" id="" class="form-control">
                    @foreach ($barang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" id="name" name="image" value="{{ old('image') }}" class="form-control-file"
                    placeholder="">
            </div>
            <div class="mb-3">
                <button class="btn btn-dark form-control">Tambah</button>
            </div>
        </form>
    </div>
@endsection
