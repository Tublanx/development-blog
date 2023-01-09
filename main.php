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
    <link rel="stylesheet" href="style/main_style.css">
    <title>become a s/w developer...</title>
</head>

<body>
    <?php include('header.php') ?>
    <!-- Masthead-->
    <header class="masthead text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="img/profile.png" alt="profile" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">lee gihyeon</h1>
            <br>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light">Backend Developer</p>
        </div>
    </header>
    <hr>
    <section class="py-5 py-xl-6">
        <div class="container mb-5 mb-md-6">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
                    <h2 class="masthead-heading mb-4 display-5 text-white">Skills</h2>
                    <p class="text-secondary mb-4 mb-md-5">주력 언어는 JAVA이고 서브 언어로는 PHP와 C#입니다.</p>
                    <hr class="w-50 mx-auto mb-0 text-secondary">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row justify-content-xl-center gy-3 gy-sm-4">
                <div class="skill col-12 col-sm-6 col-xl-5">
                    <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
                        <h3 class="fw-bold mb-2">JAVA</h3>
                        <p class="text-secondary fst-italic mb-4">Mainly developing using Spring Framework and Spring Boot.</p>
                        <div class="progress">
                            <div class="progress-bar w-100 progress-bar-striped progress-bar-animated" role="progressbar" aria-label="JAVA" aria-valuenow="100" aria-valuemin="0" aria-valuemax="50">100%</div>
                        </div>
                    </div>
                </div>
                <div class="skill col-12 col-sm-6 col-xl-5">
                    <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
                        <h3 class="fw-bold mb-2">PHP</h3>
                        <p class="text-secondary fst-italic mb-4">This site is also developed using PHP. I will study Laravel later.</p>
                        <div class="progress">
                            <div class="progress-bar w-75 progress-bar-striped progress-bar-animated" role="progressbar" aria-label="PHP" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                </div>
                <div class="skill col-12 col-sm-6 col-xl-5">
                    <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
                        <h3 class="fw-bold mb-2">MySQL</h3>
                        <p class="text-secondary fst-italic mb-4">I use MySQL primarily for database management. Additionally, we use Oracle, Tibero, etc.</p>
                        <div class="progress">
                            <div class="progress-bar w-100 progress-bar-striped progress-bar-animated" role="progressbar" aria-label="MySQL" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div>
                </div>
                <div class="skill col-12 col-sm-6 col-xl-5">
                    <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
                        <h3 class="fw-bold mb-2">C#</h3>
                        <p class="text-secondary fst-italic mb-4">It's not the main language, but it's a language that I'm constantly studying.</p>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 30%;" role="progressbar" aria-label="MySQL" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- About Section-->

    <section class="about-page page-section text-white text-center" id="about">
        <div class="container d-flex flex-column">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <br>
            <!-- About Section Content-->
            <p class="lead">안녕하세요 한국주택금융공사에서 재직중인 백엔드 개발자 이기현입니다. 현재 회사에서는 직접적인 개발을 주 업무로 두고 있지 않고, EDMS와 서고관리를 전문적으로 하고 있습니다. 개발언어는 JAVA, PHP를 주 언어로 두고 있습니다.</p>
        </div>
    </section>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Development Site 2023</small></div>
    </div>
</body>

</html>