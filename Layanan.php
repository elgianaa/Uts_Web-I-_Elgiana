<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Layanan - PT Pertamina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Tambahkan CSS kustom di sini jika diperlukan -->
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
            color: #333; /* Warna teks utama */
        }

        .navbar {
            background-color: #007bff; /* Warna navbar */
            color: #fff;
        }

        .container {
            background-color: #ffffff; /* Warna latar belakang container */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #007bff; /* Warna judul utama */
        }

        h3 {
            color: #007bff; /* Warna judul sekunder */
        }

        p {
            color: #555; /* Warna teks */
        }

        .footer {
            margin-top: 50px; /* Jarak dari konten ke footer */
            background-color: #f57b7b; /* Warna footer */
            padding: 10px;
            text-align: center;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PT Pertamina</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="layanan.php">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Isi Halaman Layanan -->
    <div class="container mt-4">
        <h2>Layanan PT Pertamina</h2>

        <h3>Pertamina Siaga 24 Jam</h3>
        <p>
            Layanan Pertamina Siaga 24 Jam memberikan akses bahan bakar dan layanan lainnya sepanjang waktu. Kami siap
            melayani kebutuhan Anda kapan pun dibutuhkan.
        </p>
        <!-- Tambahan informasi atau gambar mengenai Pertamina Siaga 24 Jam dapat ditambahkan di sini -->

        <h3>Pelayanan Pelanggan</h3>
        <p>
            Tim pelayanan pelanggan kami tersedia untuk membantu menjawab pertanyaan Anda terkait produk, layanan, dan
            informasi lainnya. Hubungi kami melalui hotline atau kunjungi kantor kami.
        </p>
        <!-- Tambahan informasi atau gambar mengenai Layanan Pelanggan dapat ditambahkan di sini -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> by 21552011326_Elgiana Liva_TIF-221PB</p>
    </footer>
</body>

</html>
