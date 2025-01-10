<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <meta property="og:title" content="Malcolm Photography - Professional Photography Website">
    <meta property="og:description" content="Explore stunning landscapes, portraits, and creative photography. Built with HTML, CSS, and JavaScript.">
    <meta property="og:image" content="https://AQEEL1007.github.io/malcolm-photography/PHOTOGRAPHY_WEBSITE_PROJECT/images/THUMBNAIL IMAGE.jpeg">
    <meta property="og:url" content="https://AQEEL1007.github.io/malcolm-photography">
    <meta name="twitter:card" content="summary_large_image">


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

<!-- Your content goes here -->
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(/photography_website_project/images/weddingphotographer.webp) no-repeat">

                <div class="content">
                    <h3>keep your moments freeze!</h3>
                    <p>Capture life's moments through the lens of Malcolm Lismore, an acclaimed wildlife, wedding, event, and street photographer. Explore the world in vivid detail and emotion through my exceptional photography.</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>

            </div>

            <div class="swiper-slide slide" style="background:url(/photography_website_project/images/naturephtography.jpg) no-repeat">

                <div class="content">
                    <h3>keep your moments freeze!</h3>
                    <p>Capture life's moments through the lens of Malcolm Lismore, an acclaimed wildlife, wedding, event, and street photographer. Explore the world in vivid detail and emotion through my exceptional photography.</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>

            </div>

            <div class="swiper-slide slide" style="background:url(/photography_website_project/images/wildlifeimage2.webp) no-repeat">

                <div class="content">
                    <h3>keep your moments freeze!</h3>
                    <p>Capture life's moments through the lens of Malcolm Lismore, an acclaimed wildlife, wedding, event, and street photographer. Explore the world in vivid detail and emotion through my exceptional photography.</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>

            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services">

    <h1 class="heading">Our services</h1>

    <div class="swiper service-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/wildlifeimage3.jpg" alt="">
                <div class="content">
                    <h3>Wildlife Photography</h3>
                    <p>"I capture the raw beauty of wildlife in their natural habitats, revealing the untamed essence of nature through my lens."</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/weddingservice1.jpeg" alt="">
                <div class="content">
                    <h3>Wedding Photography</h3>
                    <p>"I capture the magic of your wedding day, turning heartfelt moments into timeless memories you'll cherish forever."</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/street photography.jpg" alt="">
                <div class="content">
                    <h3>Street Photography</h3>
                    <p>"I capture the vibrant energy and raw emotions of everyday life, transforming fleeting moments on the streets into powerful, timeless images."</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<?php @include 'footer.php'; ?>

</div>










<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>
