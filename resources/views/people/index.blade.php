<!-- resources/views/people/index.blade.php -->
@extends('template')
@section('title', 'Data Transfer Pemain')
@section('content')
<div class="container py-4" style="max-width: 900px;">
    <h2 class="mb-3">Aplikasi Data Transfer Pemain Bola</h2>
    <p class="text-muted mb-4">Andra Kubaik Achmad - 2211102319</p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#inputModal">
        Tambah Transfer Pemain
    </button>

    <!-- Modal -->
    <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="inputModalLabel">Input Transfer Pemain</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label>Nama Pemain</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Posisi</label>
                            <input type="text" name="nama_panggilan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Nomor Punggung</label>
                            <input type="number" name="nim" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Klub Baru</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Foto Pemain</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table id="datatable" class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Nomor</th>
                <th>Klub Baru</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $index => $person)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->nama_panggilan }}</td>
                    <td>{{ $person->nim }}</td>
                    <td>{{ $person->email }}</td>
                    <td>
                        @if($person->foto)
                            <img src="{{ asset('storage/'.$person->foto) }}" width="60">
                        @else
                            <em>-</em>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('people.edit', $person->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('people.destroy', $person->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>
@endsection
