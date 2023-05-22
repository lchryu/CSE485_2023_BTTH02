<?php 
require_once './config/Connection.php';
// Kết nối đến cơ sở dữ liệu
$connection = new Connection();
$pdo = $connection->connect();
// Câu truy vấn SQL
$query = "SELECT course_id, course_name, time_begin, time_end FROM COURSE";

// Thực thi câu truy vấn
$stmt = $pdo->query($query);
$courses = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>TLU ATTENDANCE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-header {
            background-color: #f8f9fa;
        }

        .custom-header .navbar-brand {
            color: #dc3545;
            font-weight: bold;
        }

        .custom-header .nav-link {
            color: #333;
        }

        .custom-footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .custom-grid {
            margin-top: 20px;
        }

        .custom-grid .card {
            border: 1px solid black;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-light custom-header">
    <a class="navbar-brand" href="index.php">TLU ATTENDANCE</a>
    <div class="navbar-nav mr-auto">
        <a class="nav-link" href="index.php">Home</a>
    </div>
    <div class="navbar-nav ml-auto">
        <a class="nav-link" href="./login.php">Login</a>
    </div>
</header>

<div class="container">
    <div class="row custom-grid">
        <?php foreach ($courses as $course): ?>
            <div class="col-lg-4">
                <div class="card" style="width: 100%;">
                    <a href="./login.php"><img src="./assets/images/cntt.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <a href="./login.php"><h5 class="card-title"><?php echo $course['course_name']; ?></h5></a>
                        <p class="card-text">
                            <strong>Time Begin:</strong> <?php echo $course['time_begin']; ?><br>
                            <strong>Time End:</strong> <?php echo $course['time_end']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<footer class="custom-footer">
    <p>&copy; 2023 TLU ATTENDANCE. All rights reserved.</p>
</footer>
</body>
</html>


