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



<!----------------------------------------hero start------------------------------------------------->
<section class="section hero" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">World Gaming</p>

            <h1 class="h1 hero-title">
              Create <span class="span">Manage</span> Matches
            </h1>

            <p class="hero-text">
              Find technology or people for digital projects in public sector and Find an individual specialist develope
              researcher.
            </p>

            <button class="btn skewBg">Read More</button>

          </div>

          <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
            <img src="./assets/images/hero-banner.png" width="700" height="700" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>
<!----------------------------------------hero END-------------------------------------------->



<!----------------------------------------footer include start ---------------------------------------------->
  <?php include("./assets/components/footer.php")?>
<!----------------------------------------footer include End------------------------------------------>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>