<!DOCTYPE html>
<html lang="en">
  <!----------------------------------------head include---------------------------------------------->
<?php include("./assets/components/head.php")?>
<!----------------------------------------head include End------------------------------------------>
<body id="top">
  <!----------------------------------------nav  include start------------------------------------------>
  <?php include("./assets/components/nav+side.php")?>
  <!----------------------------------------nav include end---------------------------------------------->
 <!----------------------------------------search include start-------------------------------------------->
 <?php include("./assets/components/search.php")?>
 <!----------------------------------------search include end----------------------------------------->
 <main>
    <article>
<!----------------------------------------hero start------------------------------------------------->

      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <div class="hero-content">

         

            <h1 class="h1 hero-title" data-heading="Ektha'23">
             <span class="span" >Ektha'23</span>
            </h1>
			<p class="hero-subtitle"><i>The Ecstasy Of Unity</i></p>
			<img class="ukf" width="90px"  src="./assets/images/logo_ukf.png"></img>
			<p class="hero-subtitle2">Techno cultural fest</p>
			<div class="sub-img">
		<img width="440px"  src="./assets/images/sub.png">
		
      </div>

          </div>

          <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
            <img src="./assets/images/girl.png" width="700" height="700" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>
	  
<!----------------------------------------hero END-------------------------------------------->




<!---------------------------------------barnds start
   
      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="./assets/images/brand-1.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-2.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-4.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-5.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-6.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
      </section>

----------------------------------------------------------------------------------------------->

<!----------------------------------------------date morph animation start --------------------------->
<div id="container">
	<span id="text1"></span>
	<span id="text2"></span>
</div>

<svg id="filters">
	<defs>
		<filter id="threshold">
			
			<feColorMatrix in="SourceGraphic"
					type="matrix"
					values="1 0 0 0 0
									0 1 0 0 0
									0 0 1 0 0
									0 0 0 255 -140" />
		</filter>
	</defs>
</svg>
<!----------------------------------------------date morph animation end --------------------------->




<!------------------------------------------section 1 start------------------------------------->
<div class="section-wrapper">

<div class="carousel">
	<a href="https://google.com"><div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Paris</div>
			<div class="num">01</div>
			<img src="./assets/images/1.jpg" />
		</div></a>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Warsaw</div>
			<div class="num">02</div>
			<img src="./assets/images/2.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Madrid</div>
			<div class="num">03</div>
			<img
				src="./assets/images/3.jpg"
			/>
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Sydney</div>
			<div class="num">04</div>
			<img src="./assets/images/4.jpg" />
		</div>
	</div>
	<a href="https://google.com">
	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Istanbul</div>
			<div class="num">05</div>
			<img src="./assets/images/1.jpg" />
		</div>
	</div></a>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Prague</div>
			<div class="num">06</div>
			<img src="./assets/images/1.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Munich</div>
			<div class="num">07</div>
			<img src="./assets/images/1.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Venice</div>
			<div class="num">08</div>
			<img src="./assets/images/1.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Oslo</div>
			<div class="num">09</div>
			<img src="./assets/images/1.jpg" />
		</div>
	</div>
	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">London</div>
			<div class="num">10</div>
			<img src="./assets/images/1.jpg" />
		</div>
	</div>
</div>
      </div>
<!------------------------------------------section 1 END------------------------------------->



<!----------------------------------------footer include start ---------------------------------------------->
  <?php include("./assets/components/footer.php")?>
<!----------------------------------------footer include End------------------------------------------>
  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>


  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>