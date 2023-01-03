<?php

require_once 'Michelf/Markdown.inc.php';

$id = $_GET['id'];
echo $id;

$markdown_file = file_get_contents("post/$id.md");
$content = \Michelf\Markdown::defaultTransform($markdown_file);
?>

<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="/style/detail_style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title><?= $id ?></title>
</head>

<body>
    <?php include('header.php') ?>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <div class="bg">
                        <h2 class="post-title"><?php echo $id ?></h2>
                    </div>
                    <p class="post-meta">
                        Posted by 이기현 on
                        <?php
                        $date = str_replace(".md", "", explode("_", $id));
                        echo $date[2];
                        ?>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            </div>
        </div>
    </div>

    <div class="markdown-content container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?= $content ?>
            </div>
        </div>
    </div>
</body>

</html>