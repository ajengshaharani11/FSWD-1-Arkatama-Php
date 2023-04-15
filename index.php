<?php



if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portofolio Ajeng</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#portfolio">Hoby</a>

      </nav>

      <div class="follow">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-github"></a>
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="image" data-aos="fade-right">
         <img src="images/ajeng.jpg" alt="">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">hi, i am Puteri Ageng Shaharani</h3>
         <span data-aos="fade-up">Sistem Informasi</span>
         <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis labore recusandae minima molestias aliquam nostrum.</p>
         <a data-aos="fade-up" href="#about" class="btn">about me</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

      <div class="biography">

         <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

         <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Puteri Ageng Shaharani </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> putriajeng1020@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Sawit Seberang, Langkat </h3>
            <h3 data-aos="zoom-in"> <span>jenis kelamin : </span> Perempuan </h3>
            <h3 data-aos="zoom-in"> <span> Tanggal Lahir : </span> 11 juni 2002 </h3>
            <h3 data-aos="zoom-in"> <span>umur : </span> 20 years </h3>
         </div>

         <a href="#" class="btn" data-aos="fade-up">download CV</a>

      </div>

      <div class="skills" data-aos="fade-up">

         <h1 class="heading"> <span>skills</span> </h1>

         <div class="progress">
            <div class="bar" data-aos="fade-left">
               <h3><span>HTML</span> <span>65%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>CSS</span> <span>60%</span></h3>
            </div>
            <div class="bar" data-aos="fade-left">
               <h3><span>JavaScript</span> <span>65%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>PHP</span> <span>70%</span></h3>
            </div>
         </div>

      </div>

      <div class="edu-exp">

         <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

         <div class="row">

            <div class="box-container">

               <h3 class="title" data-aos="fade-right">education</h3>

               <div class="box" data-aos="fade-right">
                  <span>( 2017 - 2020 )</span>
                  <h3>SMAN 1 PADANG TUALANG</h3>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2020 - Sekarang )</span>
                  <h3>Universitas Malikussaleh</h3>
               </div>


            </div>



         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->



   <!-- services section ends -->

   <!-- portfolio section starts  -->

   <section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>Hoby</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="images/img-1.jpg" alt="">
            <h3>Membaca</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-2.jpg" alt="">
            <h3>Travelling</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-3.jpg" alt="">
            <h3>Berenang</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-4.jpg" alt="">
            <h3>Belanja</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-5.jpg" alt="">
            <h3>Memasak</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-6.jpg" alt="">
            <h3>Makan</h3>

         </div>

      </div>

   </section>



   <!-- contact section starts  -->



   <!-- contact section ends -->

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web designer</span> </div>












   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>

</body>

</html>