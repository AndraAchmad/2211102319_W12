<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - WebApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MySite</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="/catalog">Katalog</a></li>
          </ul>
        </div>
      </div>
    </nav>

    {{-- ISI UTAMA HALAMAN --}}
    <div class="container my-5">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">© 2025 Andra Kubaik Achmad. All rights reserved.</p>
    </footer>

</body>
</html>
