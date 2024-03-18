<?php

include 'config.php';

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a>  </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="uploaded_img/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our bookstore offers a seamless browsing experience, allowing you to explore a vast collection of
             books effortlessly. With advanced search functionality and personalized recommendations, finding 
             your next favorite read is easier than ever. Whether you're seeking a bestseller or a hidden gem, 
             our curated selection caters to all interests and genres. Enjoy convenient features such as user reviews, book
             previews, and secure checkout, ensuring a satisfying shopping journey from start to finish.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="uploaded_img/a.jpg" alt="">
         <p>Our bookstore is amazing! I found all the books I needed, and the service was exceptional. Highly recommended!</p>
                  <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Peter </h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (15).jpg" alt="">
         <p>Our bookstore is amazing! I found all the books I needed, and the service was exceptional. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anthony</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (15).jpg" alt="">
         <p>Our bookstore is amazing! I found all the books I needed, and the service was exceptional. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abebe</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (15).jpg" alt="">
         <p>Our bookstore is amazing! I found all the books I needed, and the service was exceptional. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Belay</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (15).jpg" alt="">
         <p>Our bookstore is amazing! I found all the books I needed, and the service was exceptional. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="uploaded_img/a.jpg" alt="">
         <p>Our bookstore is amazing! I found all the books I needed, and the service was exceptional. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shifera</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">GREAT AUTHORS</h1>

   <div class="box-container">

      <div class="box">
      <img src="uploaded_img/OIP (14).jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dr Haddis Alemayehu</h3>
      </div>

      <div class="box">
         <img src="uploaded_img/OIP (12).jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sibehat</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (13).jpg" alt="">         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dr Haddis Alemayehu</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (13).jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dr Haddis Alemayehu</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (13).jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dr Haddis Alemayehu</h3>
      </div>

      <div class="box">
      <img src="uploaded_img/OIP (13).jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Dr Haddis Alemayehu</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>