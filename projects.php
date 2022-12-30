<?php
$mysqli = mysqli_connect("localhost", "root", "1234", "blog");
$result = mysqli_query($mysqli, "select * from post");
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
</head>

<body>
    <?php include('header.php') ?>
    <div class="container">
        <div class="row-fluid ">
            <!-- my php code which uses x-path to get results from xml query. -->
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col-sm-4 ">
                    <div class="card-columns-fluid">
                        <div class="card  bg-light" style="width: 22rem; ">
                            <!-- <img class="card-img-top" src=" <?#php echo $elements->pictures->picture[2]->filename; ?> " alt="Card image cap"> -->

                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $row["title"] ?></b></h5>
                                <p class="card-text"><b><?php echo $row["content"] ?></b></p>
                                <p class="card-text"><?php echo $row["createdDate"] ?></p>
                                <a href="#" class="btn btn-secondary">Full Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!--container div  -->
</body>

</html>