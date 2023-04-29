<?php
  include_once ("commun/header.php");
  include_once ("commun/navbar.php");
?>



   <!------------ html ---------->
   <!-- Carousel ------>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img1carousel.jpg" class="d-block " alt="">
      </div>
      <div class="carousel-item">
        <img src="img/img2carousel.jpg" class="d-block " alt="">
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
  <script>
    let body = document.querySelector('body')

let mainDivCatalogs = document.createElement('div');
    mainDivCatalogs.classList.add('divCatalogs');
    body.appendChild(mainDivCatalogs);


let divCatalogMolded = document.createElement('div');
let imgMoldedNode = document.createElement('img');
let titleCatalogMolded = document.createElement('h5');
let titleCatalogMoldedText = document.createTextNode('Bougie moulée');
 
    imgMoldedNode.src = 'img/moule.jpg';
    divCatalogMolded.classList.add('moldedCatalogNode');
    divCatalogMolded.appendChild(imgMoldedNode);
    divCatalogMolded.appendChild(titleCatalogMolded);
    titleCatalogMolded.appendChild(titleCatalogMoldedText);
    mainDivCatalogs.appendChild(divCatalogMolded);

let divCatalogPoured = document.createElement('div');
let imgPouredNode = document.createElement('img');
let titleCatalogPoured = document.createElement('h5');
let titleCatalogPouredText = document.createTextNode('Bougie coulée');
    imgPouredNode.src = 'img/coule.jpg';
    divCatalogPoured.classList.add('pouredCatalogNode');
    divCatalogPoured.appendChild(imgPouredNode);
    divCatalogPoured.appendChild(titleCatalogPoured);
    titleCatalogPoured.appendChild(titleCatalogPouredText);
    mainDivCatalogs.appendChild(divCatalogPoured);


let divCatalogFondant = document.createElement('div');
let imgFondantNode = document.createElement('img');
let titleCatalogFondant = document.createElement('h5');
let titleCatalogFondantText = document.createTextNode('Fondants');
    imgFondantNode.src = 'img/fondant.jpg';
    divCatalogFondant.classList.add('fondantCatalogNode');
    divCatalogFondant.appendChild(imgFondantNode);
    divCatalogFondant.appendChild(titleCatalogFondant);
    titleCatalogFondant.appendChild(titleCatalogFondantText);
    mainDivCatalogs.appendChild(divCatalogFondant);


    divCatalogMolded.addEventListener('click', function() {
    window.location.href = 'pageMolded.php';
    });

    divCatalogPoured.addEventListener('click', function() {
    window.location.href = 'pagePoured.php';
    });

    divCatalogFondant.addEventListener('click', function() {
    window.location.href = 'pageFondant.php';
    });


    window.addEventListener('scroll', () => {
    const element = document.querySelector('.aboutImg img');
    const position = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;
    if (position < windowHeight) {
      element.classList.add('move');
    }
  });
  </script>




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



   
<!---------- CSS ----------->
<style>

#menuNav{
    border: none;
}
#logoNav{
  border: none;
}
.carousel {
    width: 100%;
    margin: auto;
    margin-bottom: 9rem;
}
.carousel-item img {
    height: 700px;
    width: 100%;
}
.divCatalogs {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 100%;
  }
  
  .divCatalogs > div {
    width: 200px;
    text-align: center;
    margin: 0rem 2rem 12rem 2rem;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    background-color: rgb(247, 179, 9);
    
  }
  .divCatalogs > div:hover {
    transform: scale(1.1);
  }
  .divCatalogs > div img {
    width: 100%;
    height: 200px;
  }
.aboutSection{
  padding: 1rem 2rem 2rem 2rem;
  margin-bottom: 12rem;
  }
.aboutText{
  width: 500px;
}
.aboutText p{
  width: 400px;
  margin: auto;
 
}

.aboutImg img{
  width: 600px;
  transform: translateX(-40%);
  transition: transform 1s ease;
}

.aboutImg img.move {
  transform: translateX(0%);
}
  </style>







