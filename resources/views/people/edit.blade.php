@extends('layout')

@section('content')
<div class="container mt-4">
@extends('layout')

@section('content')
    <h2>Edit Data Mahasiswa</h2>

    <form action="{{ route('people.update', $person->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" value="{{ $person->name }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Panggilan</label>
            <input type="text" name="nama_panggilan" class="form-control" value="{{ $person->nama_panggilan }}" required>
        </div>
        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $person->nim }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $person->email }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('people.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection

