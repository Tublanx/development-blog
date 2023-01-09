<?php
$dir = "project";
$scanned_dir = array_diff(scandir($dir), array('.', '..'));
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
            <?php for ($i = 0; $i < count($scanned_dir); $i = $i + 1) {
                $fd = fopen("project/" . $scanned_dir[$i + 2], "r") or die("file is not exists");
                while (!feof($fd)) {
                    $dataLine = fgets($fd, 10000);
                    $arr[] = $dataLine;
                }
                $title = $arr[0];
                $desc = $arr[1];
                $url = $arr[2];
            ?>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $title ?></h5>
                        <p class="card-text"><?= $desc ?></p>
                        <a href="<?= $url ?>" class="btn btn-primary">See detail</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>