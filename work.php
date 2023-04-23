<style>


@import url("https://fonts.googleapis.com/css?family=Poppins:400");


.cat{
	margin-top: 200px;

	padding: 2em 1rem;
	text-align: center;
}

[type="radio"]{
  display: none;
}
label{
  padding: 1rem 1rem;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: 0.25s;
  font-size: 2rem;
  color: black;
  background-color: blue;

    padding: 0.5rem 1rem;
  top: 0;
  position: sticky;
  background: black;
  display: inline-block;
    background: silver;
    padding: 0.5rem 1rem;
    margin-bottom: 0.25rem;

}
[type="radio"]:checked + label{
	background: red;
}
[type="radio"]:nth-of-type(2):checked ~ .gallery .card:not(.COMPUTER_SCIENCE),
[type="radio"]:nth-of-type(3):checked ~ .gallery .card:not(.ELECTRICAL),
[type="radio"]:nth-of-type(4):checked ~ .gallery .card:not(.ELECTRONICS),
[type="radio"]:nth-of-type(5):checked ~ .gallery .card:not(.CIVIL),
[type="radio"]:nth-of-type(6):checked ~ .gallery .card:not(.MECHANICAL)

{
  display: none;
}


.card:hover{
  box-shadow: 0 0 25px #0009;
}
.card__image{
  width: 100%;
  object-fit: cover;
}
.card__caption{
	font-weight: bold;
  font-variant: small-caps;
  padding: 0.5rem;
  text-align: center;
  color: gold;
}





.container {
	position: relative;
	z-index: 1;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;

}

.container .card {
	position: relative;
	width: 300px;
	height: 400px;
	background: rgba(255, 255, 255, 0.05);
	margin: 20px;
	box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
	border-radius: 15px;
	display: flex;
	justify-content: center;
	align-items: center;
	backdrop-filter: blur(10px);
}

.container .card .content {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	transition: 0.5s;
}

.container .card:hover .content {
	transform: translateY(-50px);
}

.container .card .content .imgBx {
	position: relative;
	width: 150px;
	height: 150px;
	overflow: hidden;
}

.container .card .content .imgBx img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.container .card .content .contentBx h3 {
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-weight: 500;
	font-size: 18px;
	text-align: center;
	margin: 20px 0 10px;
	line-height: 1.1em;
}

.container .card .content .contentBx h3 span {
	font-size: 12px;
	font-weight: 300;
	text-transform: initial;
}

.container .card .sci {
	position: absolute;
	bottom: 50px;
	display: flex;
}

.container .card .sci li {
	list-style: none;
	margin: 0 10px;
	transform: translateY(40px);
	transition: 0.5s;
	opacity: 0;
}

.container .card:hover .sci li {
	transform: translateY(0px);
	opacity: 1;
}

.container .card .sci li a {
	color: #fff;
	font-size: 20px;
}
</style>
<!DOCTYPE html>
<html lang="en">
  <!----------------------------------------head include---------------------------------------------->
<?php include("./assets/components/head.php")?>
<!----------------------------------------head include End------------------------------------------>
<body id="top" onload="function_loader()">
  <!----------------------------------------nav  include start------------------------------------------>
  <?php include("./assets/components/nav+side.php")?>
  <!----------------------------------------nav include end---------------------------------------------->
 <!----------------------------------------search include start-------------------------------------------->
 <?php include("./assets/components/search.php")?>
 <!----------------------------------------search include end----------------------------------------->

<body id="body">
	<div class="cat">
	<input type="radio" name="filter" id="all" checked><label for="all">ALL</label>
  <input type="radio" name="filter" id="COMPUTER_SCIENCE"><label for="COMPUTER_SCIENCE">COMPUTER SCIENCE</label>
  <input type="radio" name="filter" id="ELECTRICAL"><label for="ELECTRICAL">ELECTRICAL</label>
  <input type="radio" name="filter" id="ELECTRONICS"><label for="ELECTRONICS">ELECTRONICS</label>
  <input type="radio" name="filter" id="CIVIL"><label for="CIVIL">CIVIL</label>
  <input type="radio" name="filter" id="MECHANICAl"><label for="MECHANICAl">MECHANICAl</label>
<div class="gallery">
    <section>
		<div class="container">
<div class="card COMPUTER_SCIENCE">
        <div class="content">
            <div class="imgBx">
                <img src="https://image.flaticon.com/icons/png/256/4213/4213732.png">
            </div>
            <div class="contentBx">
                <h3>COMPUTER SCIENCE<br></h3>
            </div>
        </div>
        <ul class="sci">
            <li>
                <a href="">content 1</a>
            </li>
        </ul>
    </div>
    <div class="card COMPUTER_SCIENCE">
        <div class="content">
            <div class="imgBx">
                <img src="https://image.flaticon.com/icons/png/256/4213/4213732.png">
            </div>
            <div class="contentBx">
                <h3>COMPUTER SCIENCE<br></h3>
            </div>
        </div>
        <ul class="sci">
            <li>
                <a href="">content 1</a>
            </li>
        </ul>
    </div>


</div>
</section>
</div>
</div>

	
</body>

<!----------------------------------------footer include start ---------------------------------------------->
<?php include("./assets/components/footer.php")?>
<!----------------------------------------footer include End------------------------------------------>
  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>