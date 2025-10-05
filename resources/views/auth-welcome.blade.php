<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Selamat Datang {{ $username }}! Login Anda Berhasil!</h5>

                <div class="info-box">
                    <div class="label">Password anda adalah:</div>
                    <div class="value">{{ $password }}</div>
                </div>

                <form action="{{ url('/auth') }}" method="GET">
                    <button type="submit" class="btn">Back</button>
                </form>
            </div>
        </div>
    </div>
</body>
</body>

</html>