<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

<section class="about">

    <img src="/photography_website_project/images/aboutpngimage.png" alt="">
    <h3>about me</h3>
    <p>"Hi, I'm Malcolm Lismore, an acclaimed photographer with a passion for capturing life's most extraordinary moments. My diverse portfolio includes breathtaking wildlife photography, intimate wedding shots, dynamic event coverage, and evocative street photography. Each photo I take tells a vivid story, reflecting my keen eye for detail and my ability to blend artistry with authenticity. Through my lens, I offer you a unique perspective on the world. Explore my journey, discover what inspires me, and experience the moments I immortalize through my photography."</p>
    <a href="contact.php" class="btn">contact us</a>

</section>

<section class="behindthelens">

    <div class="insights">
        <h3>insights from me</h3>
        <p>Photography is more than just capturing images; it's about telling a story. Each project I take on, whether it's a wedding, a special event, or a wildlife expedition, has its own unique narrative. I strive to capture the emotions, the details, and the essence of every moment.</p>
        <img src="/photography_website_project/images/weddingphotobehind.jpg" alt="">
    </div>

    <div class="favproject">
        <h3>favourite projects</h3>
        <p>I've had the pleasure of working on some truly unforgettable projects. From photographing majestic lions on the savannah to capturing the joy and love at countless weddings, each experience has enriched my journey as a photographer.</p>
        <img src="/photography_website_project/images/lionphotshootfavpro.jpeg" alt="">
    </div>

    <div class="personal">
        <h3>personal anecdotes</h3>
        <p>One of my most memorable shoots was an impromptu street photography session in a bustling market. The vibrant colors, the dynamic movement, and the raw emotions of the people created an electrifying atmosphere that I was able to capture in my photos.</p>
        <img src="/photography_website_project/images/street photography.jpg" alt="">
    </div>

    <div class="btnportfolio">
    <a href="portfolio.php" class="btn">explore my portfolio</a>
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
