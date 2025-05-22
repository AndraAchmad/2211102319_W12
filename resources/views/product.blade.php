<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
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
        <div class="card mx-auto" style="max-width: 600px;">
            <img src="{{ asset('img/katalog.png') }}" alt="Produk A" class="card-img-top">
            <div class="card-body">
                <h3 class="card-title">Produk A</h3>
                <p class="card-text">Ini adalah detail lengkap dari Produk A. Produk ini sangat berguna untuk keperluan Anda.</p>
                <p><strong>Harga:</strong> Rp 1.1 Triliun</p>
                <a href="/catalog" class="btn btn-secondary">← Kembali ke Katalog</a>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">© 2025 Andra Kubaik Achmad</p>
    </footer>
</body>
</html>
