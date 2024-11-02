<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "tokobukuuu2");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        body {
            background: linear-gradient(to right, #f4f4f4, #e8e8e8);
            font-family: 'Open Sans', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }
        .login-box h2 {
            margin-bottom: 20px;
            color: #BE5C5C;
            font-weight: 600;
            text-align: center;
        }
        .form-group {
            position: relative;
        }
        .input-group-addon {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-right: none;
        }
        .form-control {
            border: 1px solid #ddd;
            border-radius: 0 5px 5px 0;
        }
        .form-control:focus {
            border-color: #BE5C5C;
            box-shadow: 0 0 5px rgba(190, 92, 92, 0.5);
        }
        .btn-primary {
            background-color: #BE5C5C;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #a95353;
        }
        .alert {
            margin-top: 20px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2><b>Admin Login </b></h2>
        <form role="form" method="post">
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Your Username" name="user" required />
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Your Password" name="pass" required />
            </div>
            <button class="btn btn-primary btn-block" name="login">Login</button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password = '$_POST[pass]'");
            $yangcocok = $ambil->num_rows;
            if ($yangcocok == 1) {
                $_SESSION['admin'] = $ambil->fetch_assoc();
                echo "<div class='alert alert-info'>Login Berhasil</div>";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
            } else {
                echo "<div class='alert alert-danger'>Login Gagal</div>";
                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
            }
        }
        ?>
        <div class="footer">
            <p>&copy; Project Semester 5 Tahun 2024.</p>
        </div>
    </div>

    
</body>
</html>
