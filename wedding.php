<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

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

<section class="portfolioimages">

    <div class="portfolioimages-container">

        <a href="/photography_website_project/images/wedding image/wpic1.jpg" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic1.jpg" alt="">
            </div>
        </a>

        <a href="/photography_website_project/images/wedding image/wpic2.jpg" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic2.jpg" alt="">
            </div>
        </a>

        <a href="/photography_website_project/images/wedding image/wpic3.jpg" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic3.jpg" alt="">
            </div>
        </a>

        <a href="/photography_website_project/images/wedding image/wpic4.jpg" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic4.jpg" alt="">
            </div>
        </a>

        <a href="/photography_website_project/images/wedding image/wpic5.jpg" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic5.jpg" alt="">
            </div>
        </a>

        <a href="/photography_website_project/images/wedding image/wpic6.jpg" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic6.jpg" alt="">
            </div>
        </a>

    </div>

</section>

<?php @include 'footer.php'; ?>

</div>










<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script>

<script>

    lightGallery(document.querySelector('.portfolioimages .portfolioimages-container'));

</script>

</body>
</html>
