<?php
// Proses login bisa ditambahkan di sini jika diperlukan

// Contoh validasi login sederhana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh validasi sederhana, bisa disesuaikan dengan kebutuhan
    if ($username === "user" && $password === "pass") {
        // Redirect ke halaman dashboard setelah login sukses
        header("Location: dashboard.php");
        exit();
    } else {
        $login_error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - PT Pertamina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PT Pertamina</a>
    </nav>

    <!-- Isi Halaman Login -->
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required />
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <?php
        include 'koneksi.php';

        // Proses login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Ambil data pengguna dari database berdasarkan username
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Pengguna ditemukan, periksa password
                $row = $result->fetch_assoc();
                if (password_verify($password, $row["password"])) {
                    // Password cocok, redirect ke halaman dashboard
                    header("Location: dashboard.php");
                    exit();
                } else {
                    $login_error = true;
                }
            } else {
                $login_error = true;
            }
        }

        // Tutup koneksi setelah selesai menggunakan
        $conn->close();
        ?>

        <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>

    </div>
</body>

</html>