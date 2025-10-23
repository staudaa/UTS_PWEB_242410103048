<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloomify | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="auth-page">
        <div class="background-bloom">
            <img src="{{ asset('assets/img/flower-1.png') }}" alt="flower" class="flower-1">
            <img src="{{ asset('assets/img/flower-2.png') }}" alt="flower" class="flower-2">
            <img src="{{ asset('assets/img/flower-3.png') }}" alt="flower" class="flower-3">
            <img src="{{ asset('assets/img/flower-4.png') }}" alt="flower" class="flower-4">
        </div>
        <div class="form-container">
            <h1 class="logo">Bloomify</h1>
            <p class="subtitle">Masuk untuk menjelajah keindahan dari bunga</p>
            <form method="POST" action="{{ route('handleLogin') }}">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password"
                        required>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
