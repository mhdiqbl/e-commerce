@extends('layouts.admin')

@section('content')
    <div class="content">
        <form action="{{ route('gallery.update', $gallerie->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
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
                <input type="text" id="name" name="nama" value="{{ $gallerie->barang->nama }}" class="form-control"
                    placeholder="" readonly>
            </div>
            <div class="mb-3">
                <img src="{{ Storage::url($gallerie->image) }}" width="500px" height="500px" alt="">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Type</label>
                <input type="file" id="image" name="image" value="{{ $gallerie->image }}" class=" form-control"
                    placeholder="">
            </div>

            <div class="mb-3">
                <button class="btn btn-dark form-control">Ubah</button>
            </div>
        </form>
    </div>
@endsection
