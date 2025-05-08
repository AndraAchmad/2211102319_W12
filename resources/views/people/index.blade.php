<!DOCTYPE html>
<html>
<head>
    <title>Data Transfer Pemain Bola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-1">Aplikasi Data Transfer Pemain Bola</h2>
        <p class="text-muted mb-4">Andra Kubaik Achmad - 2211102319</p>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Tombol buka modal -->
        <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#inputModal">
            Tambah Transfer Pemain
        </button>

        <!-- Modal Form -->
        <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('people.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="inputModalLabel">Input Transfer Pemain</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <label class="form-label">Nama Pemain</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Posisi</label>
                                <input type="text" name="nama_panggilan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Punggung</label>
                                <input type="text" name="nim" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Klub Baru</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabel Data -->
        <h2 class="mb-3">Tabel Transfer Pemain</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pemain</th>
                    <th>Posisi</th>
                    <th>Nomor</th>
                    <th>Klub Baru</th>
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
                        <a href="{{ route('people.edit', $person->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('people.destroy', $person->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS untuk modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
