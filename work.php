<style>



section::before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#DA22FF, #9733EE);
	clip-path: circle(30% at right 70%);
}

section::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#E55D87, #5FC3E4);
	clip-path: circle(20% at 10% 10%);
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
	<section>
		<div class="container">

		<div class="card">
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
					<li>
						<a href="">content 2</a>
					</li>
					<li>
						<a href="">content 3</a>
					</li>
				</ul>
			</div>
			<div class="card">
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
					<li>
						<a href="">content 2</a>
					</li>
					<li>
						<a href="">content 3</a>
					</li>
				</ul>
			</div>
			<div class="card">
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
					<li>
						<a href="">content 2</a>
					</li>
					<li>
						<a href="">content 3</a>
					</li>
				</ul>
			</div>
			<div class="card">
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
					<li>
						<a href="">content 2</a>
					</li>
					<li>
						<a href="">content 3</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
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