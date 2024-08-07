<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="loginmenu.css">
    <link rel="icon" href="smile.jpg" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <form id="login-form">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" id="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forget">
                <label><input type="checkbox"> Ingat saya</label>
                <a href="#">Lupa password</a>
            </div>

            <button type="button" class="btn" onclick="login()">Login<div class="arrow-wrapper">
                    <div class="arrow"></div></button>


            <div class="register-link">
                <p>Silakan register jika belum ada akun! <a href="#">Register</a></p>
            </div>
        </form>
    </div>

    <script>
        function login() {
            var usernameInput = document.getElementById("username").value;
            var passwordInput = document.getElementById("password").value;

            // Memeriksa apakah username dan password sesuai dengan yang diharapkan
            if (usernameInput === "adit" && passwordInput === "1234") {
                window.location.href = "home.php"; // Redirect ke halaman beranda jika akun adit valid
            } else if (usernameInput === "faisal" && passwordInput === "1234") {
                window.location.href = "home.php"; // Redirect ke halaman beranda jika akun faisal valid
            } else {
                alert("Username atau Password salah. Silakan coba lagi.");
                // Mungkin tambahkan logika lain seperti menghapus isi field input
            }
        }
    </script>
</body>

</html>