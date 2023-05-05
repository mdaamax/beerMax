<?php
session_start();
require 'functions.php';
$productList = getProductList();
?>


<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEERMAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>

<header class="brand">

    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/761/761767.png" alt="Logo" width="50" height="48"
                         class="d-inline-block ">
                    </strong>BEERMAX</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                     aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><strong>BEERMAX</strong></a>
                                <!--                                <img src="https://cdn-icons-png.flaticon.com/512/6957/6957439.png" alt="Logo" width="50" height="48" class="d-inline-block ">-->
                            </li>
                            <?php if (!empty($_SESSION['user'])): ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Здравствуйте, <?= $_SESSION['user']['username'] ?>!</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Выйти</a>
                                </li>
                                <?php if (!empty($_SESSION['user']['is_admin'])): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="create_product_type.php">Создание чего-то о пиве</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="create_product.php">Создание товара</a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="register_form.php">Войти в профиль</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#1">Что-то о пиве</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#2">Наши товары</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="Basket.php" role="button">Корзина</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row align-items-center">
            <div class="text_logo">
                <h1>ПИВО <strong>ПИТЬ</strong> СРОЧНО</h1>
                <small>ПОКА НЕ ПРИДУМАЛ</small>
                <div class="more">
                    <a href="#" class="link-dark"><strong>more</strong></a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        </p>
        <img class="kosmos d-none d-lg-xl-none d-xl-block"
             src="https://cdn-icons-png.flaticon.com/512/3263/3263018.png" alt="beer" width="600" height="600">
    </div>

</header>


<!--<section class="about_us">-->

<!--    <div class="container-xxl">-->
<!--        <div class="row">-->
<!--            <div class="about">   &lt;!&ndash; ОТСТУПЫ &ndash;&gt;-->
<!--                <h1><strong>ABOUT US</strong></h1>-->
<!--                <img src="separator.png" alt="">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container text-center">-->
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <h5>Website Design & Developme</h5>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean-->
<!--                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
<!--            </div>-->
<!--            <div class="col">-->
<!--                <h5>Graphic Design & Advertising<span><i class="fa fa-long-arrow-right"></i></span></h5>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean-->
<!--                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
<!--            </div>-->
<!--            <div class="col">-->
<!--                <h5>Advertising & Marketing Strategy<span><i class="fa fa-long-arrow-right"></i></span></h5>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean-->
<!--                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->
<section class="news">
    <a name="1"></a>
    <div class="container-xxl text-center">
        <div class="row">
            <div class="planet_n">
                <h1><strong>ЧТО-ТО ПРО ПИВО</strong></h1>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="col">
            <div class="card mb-3" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/5417/5417407.png"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ИЗМЕНИТЬ</h5>
                            <p class="card-text"><small class="text-muted">#SAVEPLANET #WORLD </small></p>
                            <p class="card-text">Хмель в пивоварении применяют с древнейших времен.
                                Именно он придает пенному напитку характерный вкус и аромат.
                                Для изготовления пива используют плоды обыкновенного хмеля – многолетнего
                                широколиственного вьющегося растения семейства тутовых. Оно предпочитает влажные леса,
                                расположенные вблизи водоемов. Цветки хмеля похожи на шишки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3887/3887778.png"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ИЗМЕНИТЬ</h5>
                            <p class="card-text"><small class="text-muted">#SPACE</small></p>
                            <p class="card-text">Терминатор – линия светораздела, отделяющая освещённую часть
                                космического тела от неосвещённой.

                                Размытая линия терминатора говорит о наличии у планеты или её спутника атмосферы и
                                наоборот.dhgdthrtehrteh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/6332/6332475.png"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ИЗМЕНИТЬ</h5>
                            <p class="card-text"><small class="text-muted">#SPACE</small></p>
                            <p class="card-text">Терминатор – линия светораздела, отделяющая освещённую часть
                                космического тела от неосвещённой.

                                Размытая линия терминатора говорит о наличии у планеты или её спутника атмосферы и
                                наоборот.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <strong><a href="#" class="link-light">more</a></strong>

</section>

<section class="colons">
    <a name="2"></a>
    <div class="container-fluid">
        <div class="our_works">
            <div class="heading-content text-center">
                <h1><strong>Наши товары</strong></h1>
            </div>
<!--            <div class="row">-->
<!--                <div class="main_mix_content whitebackground text-center">-->
<!--                    <div class="main_mix_menu">-->
<!--                        <button type="button" class="btn btn-light"><h5> All <span>/</span></h5></button>-->
<!--                        <button type="button" class="btn btn-light"><h5>architecture <span>/</span></h5></button>-->
<!--                        <button type="button" class="btn btn-light"><h5>Interior & Furniture Design <span>/</span></h5>-->
<!--                        </button>-->
<!--                        <button type="button" class="btn btn-light"><h5>Research & Graphic Design</h5></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>

</section>


<section class="back">
    <div class="container text-center">
        <div class="row align-items-start">
            <?php foreach ($productList as $product): ?>
                <div class="col gy-5">
                    <div class="card" style="width: 20rem;">
                        <img src="https://images.squarespace-cdn.com/content/v1/5287bee0e4b0fd595cc2a60f/1496155488416-4GXO8IFEZSKI8O4N3ZSB/ke17ZwdGBToddI8pDm48kMidd_fVERlblIIVuIb_11BZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpx10iUG6tfMgCBB2It1X-YJ7A5R-MhySWbfhJf8kid0Axv9bsT1zvOjTQZv2qL2czQ/Bottle-of-beer-mock-up-TOONILLA+WEB.png"
                             class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$product['title']?></h5>
                            <p class="card-price"><?=$product['price']?> ₽</p>
                            <hr>
                            <a class="btn btn-primary" href="product.php?product_id=<?=$product['id']?>" role="button">Открыть</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="more">
                <a href="#" class="link-dark"><strong>more</strong></a>
            </div>
        </div>
</section>


<section>
    <div class="container-fluid">
        <div class="why_shoose_us">
            <div class="heading-content text-center">
                <h1><strong>WHY CHOOSE US</strong></h1>
                <img src="separator.png" alt="">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="portfolio/11.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Нанотехнологии</h5>
                            <p class="card-text">Но стремящиеся вытеснить традиционное производство, нанотехнологии и по
                                сей день остаются уделом либералов, которые жаждут быть обнародованы. Есть над чем
                                задуматься: диаграммы связей указаны как претенденты на роль ключевых факторов.</p>
                            <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="portfolio/22.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок карточки</h5>
                            <p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве
                                естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
                            <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="portfolio/33.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок карточки</h5>
                            <p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве
                                естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
                            <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="portfolio/44.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body_1">
                            <h5 class="card-title">Заголовок карточки</h5>
                            <p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве
                                естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
                            <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our_team">
    <div class="container-xxl">
        <div class="row">
            <div class="our_t"> <!--ОТСТУПЫ ОТ ЗАГОЛОВКА-->
                <h1><strong>OUR TEAM</strong></h1>
                <img src="separator.png" alt="">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="11космос.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">John Doe</h5>
                        <em><small>Senior Designer</small></em>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="космос2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">John Doe</h5>
                        <em><small>Senior Designer</small></em>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="космос3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">John Doe</h5>
                        <em><small>Senior Designer</small></em>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="космос4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">John Doe</h5>
                        <em><small>Senior Designer</small></em>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!--<section class="videos">-->

<!--    <video class="w-100" controls="controls"-->
<!--           poster="https://coub-attachments.akamaized.net/coub_storage/coub/simple/cw_image/122ba4a5f24/a8016608c5bf432dca468/1567169451_00032.jpg">-->
<!--        <source src="Stuck%20In%20the%20Sound%20-%20Let's%20Go%20%5BOfficial%20Video%5D.mp4">-->
<!--    </video>-->

<!--</section>-->


<!--<section class="news">-->

<!--    <div class="container-xxl text-center">-->
<!--        <div class="row">-->
<!--            <div class="planet_n">-->
<!--                <h1><strong>ЧТО-ТО ПРО ПИВО</strong></h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="container ">-->
<!--        <div class="col">-->
<!--            <div class="card mb-3" style="max-width: 640px;">-->
<!--                <div class="row g-0">-->
<!--                    <div class="col-md-4">-->
<!--                        <img src="https://cdn-icons-png.flaticon.com/512/4748/4748153.png"-->
<!--                             class="img-fluid rounded-start" alt="...">-->
<!--                    </div>-->
<!--                    <div class="col-md-8">-->
<!--                        <div class="card-body">-->
<!--                            <h5 class="card-title">ИЗМЕНИТЬ</h5>-->
<!--                            <p class="card-text"><small class="text-muted">#SAVEPLANET #WORLD </small></p>-->
<!--                            <p class="card-text">Исследование: Земля сформировалась всего за пять миллионов лет-->
<!--                                ⠀-->
<!--                                Предыдущие исследования указывали, что на формирование Земли ушли десятки или даже сотни-->
<!--                                миллионов лет. Если же Земля сформировалась быстро и из пыли, то это бы объясняло-->
<!--                                некоторые ее особенности.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="card mb-3" style="max-width: 640px;">-->
<!--                <div class="row g-0">-->
<!--                    <div class="col-md-4">-->
<!--                        <img src="https://cdn-icons-png.flaticon.com/512/9171/9171686.png"-->
<!--                             class="img-fluid rounded-start" alt="...">-->
<!--                    </div>-->
<!--                    <div class="col-md-8">-->
<!--                        <div class="card-body">-->
<!--                            <h5 class="card-title">ИЗМЕНИТЬ</h5>-->
<!--                            <p class="card-text"><small class="text-muted">#SPACE</small></p>-->
<!--                            <p class="card-text">Терминатор – линия светораздела, отделяющая освещённую часть-->
<!--                                космического тела от неосвещённой.-->

<!--                                Размытая линия терминатора говорит о наличии у планеты или её спутника атмосферы и-->
<!--                                наоборот.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="card mb-3" style="max-width: 640px;">-->
<!--                <div class="row g-0">-->
<!--                    <div class="col-md-4">-->
<!--                        <img src="https://cdn-icons-png.flaticon.com/512/9171/9171686.png"-->
<!--                             class="img-fluid rounded-start" alt="...">-->
<!--                    </div>-->
<!--                    <div class="col-md-8">-->
<!--                        <div class="card-body">-->
<!--                            <h5 class="card-title">ИЗМЕНИТЬ</h5>-->
<!--                            <p class="card-text"><small class="text-muted">#SPACE</small></p>-->
<!--                            <p class="card-text">Терминатор – линия светораздела, отделяющая освещённую часть-->
<!--                                космического тела от неосвещённой.-->

<!--                                Размытая линия терминатора говорит о наличии у планеты или её спутника атмосферы и-->
<!--                                наоборот.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <strong><a href="#" class="link-light">more</a></strong>-->

<!--</section>-->


<!--<section class="our_skills">-->
<!--    <div class="container-xxl ">-->
<!--        <div class="our_skill">-->
<!--            <div class="heading-content text-center">-->
<!--                <h1><strong>OUR SKILLS</strong></h1>-->
<!--                <img src="separator.png" alt="">-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="row">-->
<!--            <div class="skills-wrapper">-->
<!--                <div class="col-sm-6 col-xs-12">-->
<!--                    <div class="skills-content">-->

<!--                    </div>-->
<!--                </div>-->


<!--                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                    <div class="skillbar">-->
<!--                        <div class="skillbar-title">-->
<!--                            <h3 class="blue">Adobe-photoshop</h3>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="skillbar_1">-->
<!--                        <div class="skillbar-title">-->
<!--                            <h3 class="blue">Adobe-Illustrator</h3>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="skillbar_2">-->
<!--                        <div class="skillbar-title">-->
<!--                            <h3 class="blue">HTML5</h3>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="skillbar_3">-->
<!--                        <div class="skillbar-title">-->
<!--                            <h3 class="blue">CSS</h3>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="skillbar_4">-->
<!--                        <div class="skillbar-title">-->
<!--                            <h3 class="blue">JavaScript</h3>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="skillbar_5">-->
<!--                        <div class="skillbar-title">-->
<!--                            <h3 class="blue">Phython</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div id="brands" class="container text-center">-->
<!--        <div class="row">-->
<!--            <div class="col align-self-start">-->
<!--                <img src="brand-logo/1.png" alt="">-->
<!--            </div>-->
<!--            <div class="col align-self-center">-->
<!--                <img src="brand-logo/2.png" alt="">-->
<!--            </div>-->
<!--            <div class="col align-self-end">-->
<!--                <img src="brand-logo/3.png" alt="">-->
<!--            </div>-->
<!--            <div class="col align-self-start">-->
<!--                <img src="brand-logo/4.png" alt="">-->
<!--            </div>-->
<!--            <div class="col align-self-center">-->
<!--                <img src="brand-logo/5.png" alt="">-->
<!--            </div>-->
<!--            <div class="col align-self-end">-->
<!--                <img src="brand-logo/6.png" alt="">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->


<!--<section class="carusrel">-->

<!--    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">-->
<!--        <div class="carousel-indicators">-->
<!--            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"-->
<!--                    aria-current="true" aria-label="Slide 1"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"-->
<!--                    aria-label="Slide 2"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"-->
<!--                    aria-label="Slide 3"></button>-->
<!--        </div>-->
<!--        <div class="carousel-inner">-->
<!--            <div class="carousel-item active" data-bs-interval="10000">-->
<!--                <img src="https://s1.1zoom.ru/b5050/372/Planets_Earth_436361_1920x1080.jpg" class="d-block w-100"-->
<!--                     alt="...">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h1>Метка первого слайда</h1>-->
<!--                    <h3>Некоторый репрезентативный заполнитель для первого слайда.</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="carousel-item" data-bs-interval="2000">-->
<!--                <img src="https://fullhdoboi.ru/wp-content/uploads/_ph/9/876178689.jpg" class="d-block w-100" alt="...">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h1>Метка второго слайда</h1>-->
<!--                    <h3>Некоторый репрезентативный заполнитель для второго слайда.</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img src="https://img3.akspic.ru/crops/5/0/3/6/6/166305/166305-mars-privet_more-planeta-planshet-atmosfera-1920x1080.jpg"-->
<!--                     class="d-block w-100" alt="...">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h1>Метка третьего слайда</h1>-->
<!--                    <h3>Некоторый репрезентативный заполнитель для третьего слайда.</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">-->
<!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--            <span class="visually-hidden">Предыдущий</span>-->
<!--        </button>-->
<!--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">-->
<!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--            <span class="visually-hidden">Следующий</span>-->
<!--        </button>-->
<!--    </div>-->

<!--</section>-->


<section class="thank_you">

    <div class="container-fluid text-center">
        <div class="why_shoose_us">
            <div class="heading-content text-center">
                <h1><strong>Спасибо!</strong></h1>
            </div>
        </div>
        <div class="container overflow-hidden text-center">
            <div class="mb-5">
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="имя">
            </div>
        </div>
        <div class="container overflow-hidden text-center">
            <div class="mb-5">
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="e-mail">
            </div>
        </div>
        <div class="container overflow-hidden text-center">
            <div class="mb-5">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="сообщение"></textarea>
            </div>
        </div>
        <div class="more">
            <a href="#" class="link-dark"><strong>send</strong></a>
        </div>
    </div>

</section>


<section class="contact_us">

    <div class="container-xxl">
        <div class="row">
            <div class="contact_u">
                <h1><strong>Контактная информация</strong></h1>
                <img src="separator.png" alt="">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa.</p>
                <p class="down">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    mus.</p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-start">
                <img src="send_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h5>https://t.me/gruzevo</h5>
            </div>
            <div class="col align-self-center">
                <img src="home_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h6>РОССИЯ, АСТРАХАНЬ</h6>
            </div>
            <div class="col align-self-end">
                <img src="phone_enabled_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h6>+7(880)555-35-35</h6>
            </div>
        </div>
    </div>
</section>

<footer>
    <h4>BEERMAX</h4>
    <h5>Россия</h5>
    <p>@МдаМакс Inc.,2023 г.Все права защищены.</p>
    <small>или не все</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>