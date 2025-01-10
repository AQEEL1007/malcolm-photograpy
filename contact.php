<?php
// Establish a connection to the database
$conn = mysqli_connect('localhost', 'root', '', 'contact_db');

// Check if the connection was successful
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if the form was submitted
if (isset($_POST['send'])) {
    
    // Retrieve and sanitize user inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $plan = mysqli_real_escape_string($conn, $_POST['plan']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Prepare an insert statement
    $sql = "INSERT INTO `contact-form` (`name`, `email`, `number`, `plan`, `address`, `message`) VALUES (?, ?, ?, ?, ?, ?)";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        // Ensure the type string matches the number of parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $number, $plan, $address, $message);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to the contact page
            header("Location: contact.php");
            exit();
        } else {
            echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
        }
    } else {
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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

<section class="contact">

    <h1 class="heading">contact us</h1>

    <form action="" method="post">

        <div class="flex">

            <div class="inputBox">
                <span>your name</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>

            <div class="inputBox">
                <span>your email</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>

            <div class="inputBox">
                <span>your number</span>
                <input type="number" placeholder="enter your number" name="number" required>
            </div>

            <div class="inputBox">
                <span>choose plan</span>
                <select name="plan">
                    <option value="package 1">package 1</option>
                    <option value="package 2">package 2</option>
                    <option value="package 3">package 3</option>
                </select>
            </div>

            <div class="inputBox">
                <span>your address</span>
                <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
            </div>

            <div class="inputBox">
                <span>your message</span>
                <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
            </div>

        </div>

        <input type="submit" value="send message" name="send" class="btn">

    </form>

</section>

<?php @include 'footer.php'; ?>

</div>










<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>
