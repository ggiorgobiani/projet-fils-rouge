<?php
  include_once ("commun/header.php");
  include_once ("commun/navbar.php");
?>

<link rel="stylesheet" href="css/style.css">

   <!------------ html ---------->
   <!-- Carousel ------>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img2carousel.jpg" class="d-block " alt="">
      </div>
      <div class="carousel-item">
        <img src="img/img1carousel.jpg" class="d-block " alt="">
      </div>
      <div class="carousel-item">
        <img src="img/img3carousel.jpg" class="d-block " alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  

<!---------- Javascript ------------->

<script src="js/indexScript.js"></script>



<!--------- HTML ---èèè--->
<section class="row aboutSection">
  <div  class="aboutText col">
  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Saepe aspernatur voluptatem, cupiditate ab assumenda labore 
     nostrum omnis! Asperiores, earum! Aut ratione temporibus facere 
     debitis unde, dicta dolore quam et autem.
     Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Saepe aspernatur voluptatem, cupiditate ab assumenda labore 
     nostrum omnis! Asperiores, earum! Aut ratione temporibus facere 
     debitis unde, dicta dolore quam et autem.
     Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Saepe aspernatur voluptatem, cupiditate ab assumenda labore 
     nostrum omnis! Asperiores, earum! Aut ratione temporibus facere 
     debitis unde, dicta dolore quam et autem.</p>
  </div>
  <div class="aboutImg col">
    <img src="img/candle-making.jpg" alt="aboutMaking">
  </div>
</section>





<!----------  footer  ------------->
<?php
  include_once ("commun/footer.php");
?>







