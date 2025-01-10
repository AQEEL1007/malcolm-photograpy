<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

</head>
<body>

<!-- Your content goes here -->
<div class="container">

<?php @include 'header.php'; ?>

<section class="package">

    <h1 class="heading">our packages</h1>

    <div class="box-container">

        <div class="box">
            <h3>package 1</h3>
            <div class="price">LKR.30000</div>
            <div class="list">
                <p> <i class="fas fa-check"></i>photography</p>
                <p> <i class="fas fa-check"></i>editing</p>
                <p> <i class="fas fa-check"></i>soft copy</p>
            </div>
            <a href="contact.php" class="btn">select plan</a>
        </div>

        <div class="box">
            <h3>package 2</h3>
            <div class="price">LKR.45000</div>
            <div class="list">
                <p> <i class="fas fa-check"></i>photography</p>
                <p> <i class="fas fa-check"></i>editing</p>
                <p> <i class="fas fa-check"></i>hard copy</p>
            </div>
            <a href="contact.php" class="btn">select plan</a>
        </div>

        <div class="box">
            <h3>package 3</h3>
            <div class="price">LKR.60000</div>
            <div class="list">
                <p> <i class="fas fa-check"></i>photography</p>
                <p> <i class="fas fa-check"></i>editing</p>
                <p> <i class="fas fa-check"></i>hard copy</p>
                <p> <i class="fas fa-check"></i>photo album</p>
            </div>
            <a href="contact.php" class="btn">select plan</a>
        </div>

    </div>

</section>

<section class="reviews">

    <h1 class="heading">happy clients</h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/reviewclients/rpic1.jpg" alt="">
                <h3>Emily & Jack</h3>
                <p>Malcolm's photos from our wedding are stunning! He captured every special moment perfectly.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/reviewclients/rpic2.jpg" alt="">
                <h3>Sarah M</h3>
                <p>The wildlife photos Malcolm took are simply breathtaking. His work is truly exceptional.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/reviewclients/rpic3.png" alt="">
                <h3>David L</h3>
                <p>Malcolm's eye for detail at our event was amazing. The pictures turned out fantastic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/reviewclients/rpic4.png" alt="">
                <h3>Mia & Alex</h3>
                <p>Our engagement shoot with Malcolm was so much fun, and the photos are beautiful keepsakes.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/reviewclients/rpic5.png" alt="">
                <h3>James T</h3>
                <p>Malcolm's street photography brings everyday scenes to life in such a unique way. Incredible work.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="/photography_website_project/images/reviewclients/rpic6.jpg" alt="">
                <h3>Anna & Peter</h3>
                <p>Malcolm exceeded our expectations with his stunning photography. Every photo radiates with joy and authenticity. We are thrilled with the results!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
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
