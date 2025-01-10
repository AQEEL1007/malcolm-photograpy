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

<section class="portfolio">

    <h1 class="heading">our portfolio</h1>

    <div class="portfolio-container">

        <a href="street.php" class="box">
            <div class="image">
                <img src="/photography_website_project/images/street image/spic1.jpg" alt="">
            </div>
            <h3>street photographs</h3>
        </a>

        <a href="wedding.php" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wedding image/wpic1.jpg" alt="">
            </div>
            <h3>wedding photographs</h3>
        </a>

        <a href="wildlife.php" class="box">
            <div class="image">
                <img src="/photography_website_project/images/wildlife image/wpic1.jpg" alt="">
            </div>
            <h3>wildlife photographs</h3>
        </a>

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
