<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Release</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Header with gradient background */
        #header {
            background: linear-gradient(90deg, #469db0 0%, #3b82f6 100%);
            padding: 20px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        #header h1 {
            color: white;
            text-align: center;
            font-size: 48px;
            margin: 0;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .welcome-message {
            text-align: center;
            color: #f8192e;
            font-size: 22px;
            margin: 10px 0;
            font-weight: 500;
        }

        .headerBackground {
            background: url('img/background.jpg') no-repeat center center/cover;
            height: 250px;
            position: relative;
        }

        /* Styling for the New Releases section */
        article {
            background-color: white;
            padding: 30px;
            margin: 30px auto;
            border-radius: 15px;
            max-width: 1000px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        article:hover {
            transform: translateY(-10px);
        }

        article h2 {
            text-align: center;
            font-size: 28px;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Button for New Releases */
        .new-release-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #f8192e;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            border-radius: 50px;
            text-align: center;
            font-weight: bold;
            margin: 20px auto;
            display: block;
            transition: background-color 0.3s ease;
        }

        .new-release-btn:hover {
            background-color: #e50000;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #header h1 {
                font-size: 36px;
            }

            .welcome-message {
                font-size: 20px;
            }

            article {
                margin: 20px;
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            #header h1 {
                font-size: 28px;
            }

            .welcome-message {
                font-size: 18px;
            }

            article {
                padding: 15px;
            }
        }

        /* Footer for better structure */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
        }

        footer a {
            color: #f8192e;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="header">
            <div class="headerBackground">
                <h1>TOKO DUNIA BUKU </h1>
            </div>
            <h2 class="welcome-message">Hallo Selamat Datang Admin <?php echo $_SESSION['admin']['nama_lengkap']; ?></h2>
        </div>

        <article>
            <a href="#" class="new-release-btn">Admin SILAHKAN MEMILIH MENU DISAMPING </a>
        </article>

        <footer>
            &copy; 2024 Toko Buku. Semester 5. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
