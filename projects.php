<?php
$mysqli_host = "localhost";
$mysqli_user = "root";
$mysqli_password = "1234";
$mysqli_db = "blog";

$conn = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_password, $mysqli_db);

if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "select * from project");
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b17d4fa9e7.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/header_style.css">
    <title>Projects</title>

    <style>
        .btn {
            color: #FFF;
            border-radius: 5px;
            font-family: "Lucida Console", Monaco, monospace;
            font-size: 14px;
            letter-spacing: 1px;
        }
    </style>

</head>

<body>
    <?php include('header.php') ?>
    <div class="container">
        <div class="row ml-5">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["title"] ?></h5>
                        <p class="card-text"><?php echo $row["content"] ?></p>
                        <a href="<?php echo $row["url"] ?>" class="btn btn-primary">See detail</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>