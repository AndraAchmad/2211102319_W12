<!DOCTYPE html>
<html>
<head>
    <title>Katalog Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/home">MySite</a>
            <a class="nav-link text-white" href="/login">Login</a>
            <a class="nav-link text-white" href="/registration">Register</a>
            <a class="nav-link text-white" href="/catalog">Katalog</a>
            <a class="nav-link text-white" href="/product">Produk</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">🛒 Katalog Produk</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/katalog.png') }}" alt="Produk A" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Produk A</h5>
                        <p class="card-text">Deskripsi singkat produk A.</p>
                        <a href="/product" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Tambah produk lain di sini -->
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">© 2025 Andra Kubaik Achmad</p>
    </footer>
</body>
</html>
