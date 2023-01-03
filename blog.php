<?php
$dir = 'post';
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
    <link rel="stylesheet" href="/style/blog_style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>become a s/w developer...</title>
</head>

<body>
    <?php include('header.php') ?>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php for ($i = 0; $i < count($scanned_dir); $i = $i + 1) { ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="detail.php?id=<?= str_replace(".md", "", $scanned_dir[$i + 2]) ?>">
                            <h2 class="post-title"><?= str_replace(".md", "", $scanned_dir[$i + 2]) ?></h2>
                        </a>
                        <p class="post-meta">
                            Posted by 이기현 on
                            <?php
                            $date = str_replace(".md", "", explode("_", $scanned_dir[$i + 2]));
                            echo $date[2];
                            ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php } ?>
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
</body>

</html>