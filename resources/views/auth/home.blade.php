<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        background: url("{{ asset('img/home.png') }}") no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
        color: #fff;
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-success {
        background-color: #ff5c8d;
        border: none;
    }
</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/home">MySite</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="/registration">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="/catalog">Katalog</a></li>
        <li class="nav-item"><a class="nav-link" href="/product">Produk</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-5 text-center" style="width: 100%; max-width: 500px;">
        <h2 class="mb-3">👋 Halo, {{ Auth::user()->name }}</h2>
        <p class="lead mb-4">Selamat datang di sistem. Kamu berhasil login!</p>
        <a href="{{ url('/logout') }}" class="btn logout-btn text-white px-4 py-2">Logout 🔓</a>
    </div>
</div>
</body>
</html>
