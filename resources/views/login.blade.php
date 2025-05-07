<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #E6B2BA;
    }
</style>
<body>
    <div class="d-flex align-items-center justify-content-center" style="height: 80vh;">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;background-color: pink;">
            <h3 class="text-center mb-4">Login</h3>

            @if(session('error'))
                <div class="alert alert-danger">\
                    {{ session('error') }}
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input type="text" name="email" id="email" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

