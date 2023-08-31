<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/sanatan.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p><b>1. Wide Selection of Titles</b></p>
            <p><b>2. Professional Narrators</b></p>
            <p><b>3. Immersive Experience</b></p>
            <p><b>4. Listen Anywhere, Anytime</b></p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p><b>1. Vast Audiobook Library</b></p>
            <p><b>2.Premium Narrators</b></p>
            <p><b>3.User-Friendly App</b></p>
            <p><b>4.High-Quality Audio</b></p>

            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/ramayan.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/bappa.webp" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>At AudioVerse, we are passionate about bringing the world of literature to life through the power of audio. Our platform is more than just a place to find and listen to audiobooks; it's a community of book enthusiasts, narrators, and creators who share a common love for storytelling.</p>
            <a href="#reviews" class="btn">client reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>I've always loved reading, but with my busy schedule, finding time for books was a challenge. Thanks to AudioVerse, I can now dive into captivating stories during my daily commute. The selection is fantastic, and the narrators bring the characters to life. It's like having a personal storyteller wherever I go!.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 1</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>"As a parent, I wanted to instill a love for literature in my kids. [Your Audiobook Platform Name] has been a game-changer for us. The children's audiobooks are engaging, and the interactive features keep my kids entertained and learning. It's a win-win for both education and entertainment!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 2</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>As a language learner, I've found that listening to audiobooks helps me improve my pronunciation and comprehension skills. AudioVerse selection of language learning audiobooks has been a tremendous resource for me. I can learn while enjoying gripping stories – it's a win-win!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 3</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>I've been a member of various audiobook platforms, but AudioVerse stands out for its user-friendly interface and personalized recommendations. The platform's algorithms really understand my preferences and introduce me to new titles that I might have missed otherwise. I'm hooked</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 4</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>I've been a member of various audiobook platforms, but AudioVerse stands out for its user-friendly interface and personalized recommendations. The platform's algorithms really understand my preferences and introduce me to new titles that I might have missed otherwise. I'm hooked</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 5</h3>
        </div>

        <div class="box">
            <img src="images/profile.png" alt="">
            <p>Being visually impaired, I've always relied on audiobooks to access the world of literature. AudioVerse understands the importance of accessibility. The platform's commitment to providing a wide range of audiobooks with clear narration and user-friendly navigation has made my reading experience truly enjoyable.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>USER 6</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>