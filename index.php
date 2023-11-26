<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>PT Pertamina</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa; /* Warna latar belakang */
        color: #333; /* Warna teks utama */
      }
      .footer {
        margin-top: auto;
        background-color: #f57b7b; /* Ganti warna latar belakang sesuai kebutuhan */
        padding: 10px;
        text-align: center;
      }

      .header {
        background-color: #007bff; /* Warna header */
        color: #fff;
        padding: 15px 0;
        text-align: center;
      }

      .logo img {
        width: 80px;
        border-radius: 50%; /* Memberikan sudut melengkung pada logo */
      }

      .banner {
        text-align: center;
        padding: 50px 0;
      }

      .banner img {
        max-width: 100%;
        border-radius: 10px; /* Memberikan sudut melengkung pada gambar banner */
      }

      .banner-text {
        margin-top: 20px;
      }

      .tentang-perusahaan {
        padding: 50px 0;
      }

      h1,
      h2,
      h3 {
        color: #007bff; /* Warna judul */
      }

      .btn {
        margin-top: 10px;
      }
      .col {
        color: #fffcfc;
      }
      .navbar-brand {
        color: #f57b7b;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <div class="logo">
        <img src="Logo Pertamina.jpg" alt="Logo Pertamina" />
      </div>
      <h1 class="col">PT Pertamina</h1>
    </div>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT Pertamina</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <!-- Tambahkan tautan Home di sini -->
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="detail.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Registrasi</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="dashboard.php">Dashboard</a>
      </li>
    </ul>
  </div>
</nav>


    <!-- Banner -->
    <section class="banner">
      <img src="banner-Kios-Pertamina-siaga.png" alt="Banner Pertamina" />
      <div class="banner-text">
        <h2>"Energi Berkualitas, Masa Depan Terjamin"</h2>
        <p>PT Pertamina mengoperasikan lima sub holding di sektor energi. </p>
      </div>
    </section>

    <!-- Isi Halaman Utama -->
    <div class="container mt-4">
      <h1>Selamat Datang di PT Pertamina</h1>
      <p>PT Pertamina dan informasi lainnya.</p>
      <a class="btn btn-primary" href="detail.php"
        >Baca Selengkapnya</a
      >
    </div>
    <footer class="footer">
      <p>@Copyright by 21552011326_Elgiana Liva_TIF-221PB</p>
    </footer>
  </body>
</html>
