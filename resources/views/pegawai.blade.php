<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            background-color: #3187e9;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
        }

        .card {
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Halaman Pegawai</a>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1> {{ $name }} </h1>
            <p>Umur: {{ $my_age }} tahun</p>
            <p>Cita-cita: {{ $future_goal }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content" class="container ">
        <div class="row">
            <div class="col-md-6">
                {{-- About --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Hobi Saya:</h5>
                        <ul>
                            @foreach ($hobbies as $hobby)
                                <li>{{ $hobby }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- About --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tanggal:</h5>
                        <p><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
                        <p><strong>Sisa Waktu Belajar:</strong>
                            {{ $time_to_study_left }} hari lagi
                        </p>
                    </div>
                </div>
                {{-- About --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Semester:</h5>
                        <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>
                        <p><strong>{{ $informasi }}</strong></p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} My Laravel App. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
