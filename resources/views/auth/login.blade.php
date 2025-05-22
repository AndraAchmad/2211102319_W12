<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background: url("{{ asset('img/login.png') }}") no-repeat center center fixed;
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


<body class="bg-light">
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

<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4">Login</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/auth') }}">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ url('/registration') }}" class="btn btn-link">Belum punya akun?</a>
    </form>
</div>
</body>
</html>
