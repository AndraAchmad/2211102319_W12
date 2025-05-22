<!-- resources/views/people/edit.blade.php -->
@extends('template')
@section('title', 'Edit Transfer Pemain')
@section('content')
<div class="container py-4" style="max-width: 900px;">
    <h2 class="mb-3">Edit Transfer Pemain</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('people.update', $person->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Pemain</label>
            <input type="text" name="name" value="{{ $person->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="nama_panggilan" value="{{ $person->nama_panggilan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nomor Punggung</label>
            <input type="number" name="nim" value="{{ $person->nim }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Klub Baru</label>
            <input type="email" name="email" value="{{ $person->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ganti Foto Pemain (opsional)</label>
            <input type="file" name="foto" class="form-control">
            @if ($person->foto)
                <p class="mt-2">Foto sekarang:</p>
                <img src="{{ asset('storage/' . $person->foto) }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('people.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
