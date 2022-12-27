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
    <link rel="stylesheet" href="/style/header_style.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
    <title>Become a real Developer</title>

    <style>
        body {
            background-color: #263343;
        }

        header {
            animation: fadein 3s;
            -moz-animation: fadein 3s;
            -webkit-animation: fadein 3s;
            -o-animation: fadein 3s;

            margin-top: 150px;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>

</head>

<body>
    <?php include('header.php') ?>
    <main class="measure center tc sans-serif white-80">
        <div class="flex flex-column justify-center items-center h-100">
            <header>
                <h1 class="d2 a-1 f2 fw3">
                    <code class="db white-40">Developer</code>
                </h1>
                <h2 class="d-1 a-2">
                    I designed it to organize <span class="nowrap">development history</span>
                </h2>
                <div class="d-2 mt4">
                    <a href="https://github.com/Tublanx" class="dib link bw1 b--solid b--dark-blue dark-blue fw9 pa3 br3 hover-white hover-bg-dark-blue">
                        View on Github
                    </a>
                </div>
            </header>
        </div>
    </main>
</body>

</html>