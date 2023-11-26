<?php
// Proses registrasi 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    // Contoh validasi sederhana
    if ($password === $confirmPassword) {
        // Proses registrasi berhasil
        $registration_success = true;
    } else {
        $registration_error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registrasi - PT Pertamina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #343a40;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-primary:hover {
            background-color: #23272b;
            border-color: #23272b;
        }

        p {
            margin-top: 20px;
            text-align: center;
        }

        a {
            color: #343a40;
        }

        a:hover {
            color: #23272b;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PT Pertamina</a>
    </nav>

    <!-- Isi Halaman Registrasi -->
    <div class="container">
        <h2 class="text-center">Registrasi Akun</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required />
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Konfirmasi password" required />
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Registrasi
            </button>
        </form>
        <?php
        include 'koneksi.php';

        // Proses registrasi 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirm-password"];

            // Contoh validasi sederhana
            if ($password === $confirmPassword) {
                // Hash password sebelum menyimpan ke database
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Simpan data ke database
                $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
                if ($conn->query($sql) === TRUE) {
                    $registration_success = true;
                } else {
                    $registration_error = true;
                }
            } else {
                $registration_error = true;
            }
        }

        // Tutup koneksi setelah selesai menggunakan
        $conn->close();
        ?>

        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
    </div>
</body>

</html>