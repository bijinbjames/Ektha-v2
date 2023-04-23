<?php
  require_once './assets/functions/db.php';

    
if (isset($_POST['workshop_dept'])) {
   $workshop_dept = $_POST["workshop_dept"];

   $hsql2 = "SELECT * FROM workshops WHERE workshop_dept = '$workshop_dept'";
   $result = mysqli_query($dbcon, $hsql2);
   
   $row = mysqli_fetch_array($result);


}
    ?>
<style>body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: #161418;
  color: #eee;
  user-select: none;
}

code {
  font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New", monospace;
}

.nft {
  user-select: none;
  max-width: 300px;
  margin: 5rem auto;
  border: 1px solid #ffffff22;
  background-color: #282c34;
  background: linear-gradient(0deg, #282c34 0%, rgba(17, 0, 32, 0.5) 100%);
  box-shadow: 0 7px 20px 5px #00000088;
  border-radius: 0.7rem;
  backdrop-filter: blur(7px);
  -webkit-backdrop-filter: blur(7px);
  overflow: hidden;
  transition: 0.5s all;
}
.nft hr {
  width: 100%;
  border: none;
  border-bottom: 1px solid #88888855;
  margin-top: 0;
}
.nft ins {
  text-decoration: none;
}
.nft .main {
  display: flex;
  flex-direction: column;
  width: 90%;
  padding: 1rem;
}
.nft .main .tokenImage {
  border-radius: 0.5rem;
  max-width: 100%;
  height: 250px;
  object-fit: cover;
}
.nft .main .description {
  margin: 0.5rem 0;
  color: #a89ec9;
}
.nft .main .tokenInfo {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.nft .main .tokenInfo .price {
  display: flex;
  align-items: center;
  color: #ee83e5;
  font-weight: 700;
}
.nft .main .tokenInfo .price ins {
  margin-left: -0.3rem;
  margin-right: 0.5rem;
}
.nft .main .tokenInfo .duration {
  display: flex;
  align-items: center;
  color: #a89ec9;
  margin-right: 0.2rem;
}
.nft .main .tokenInfo .duration ins {
  margin: 0.5rem;
  margin-bottom: 0.4rem;
}
.nft .main .creator {
  display: flex;
  align-items: center;
  margin-top: 0.2rem;
  margin-bottom: -0.3rem;
}
.nft .main .creator ins {
  color: #a89ec9;
  text-decoration: none;
}
.nft .main .creator .wrapper {
  display: flex;
  align-items: center;
  border: 1px solid #ffffff22;
  padding: 0.3rem;
  margin: 0;
  margin-right: 0.5rem;
  border-radius: 100%;
  box-shadow: inset 0 0 0 4px #000000aa;
}
.nft .main .creator .wrapper img {
  border-radius: 100%;
  border: 1px solid #ffffff22;
  width: 2rem;
  height: 2rem;
  object-fit: cover;
  margin: 0;
}
.nft ::before {
  position: fixed;
  content: "";
  box-shadow: 0 0 100px 40px #ffffff08;
  top: -10%;
  left: -100%;
  transform: rotate(-45deg);
  height: 60rem;
  transition: 0.7s all;
}
.nft:hover {
  border: 1px solid #ffffff44;
  box-shadow: 0 7px 50px 10px #000000aa;

  filter: brightness(1.3);
}
.nft:hover ::before {
  filter: brightness(0.5);
  top: -100%;
  left: 200%;
}

.bg {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.bg h1 {
  font-size: 20rem;
  filter: opacity(0.5);
}

.register-btn {
  display: block;
  margin: auto;
  width: 200px;
  height: 50px;
  font-size: 18px;
  text-align: center;
  line-height: 50px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

</style>
<!DOCTYPE html>
<html lang="en">

  <!--  Thanks to frontendmentor.io for the challenge.  -->
  
  <body>

<?php

// Get the workshop name from the POST data
$workshop_name = $_POST['workshop_name'];

// Query the database to get the details of the selected workshop
$hsql3 = "SELECT * FROM workshops WHERE workshop_name='$workshop_name'";
$result = mysqli_query($dbcon, $hsql3);

// Check if there was a result
if(mysqli_num_rows($result) > 0) {

  // Loop through the results and display the workshop details
  while($row = mysqli_fetch_array($result)) {

    ?>

    <div class="nft">
      <div class='main'>
        <img class='tokenImage' src="<?php echo $row['workshop_image'];?>" alt="img" />
        <h2><?php echo $row['workshop_name'];?></h2>
        <ins>About</ins>
        <p class='description'><?php echo $row['workshop_about'];?></p>
        <ins>Venue</ins>
        <p class='description'><?php echo $row['workshop_venue'];?></p>
        <ins>Date</ins>
        <p class='description'><?php echo $row['Date'];?></p>
        <div class='tokenInfo'>
          <div class="price">
            <ins>REG FEES</ins>
            <p><?php echo $row['workshop_fee'];?> ₹</p>
          </div>
        </div>
        <hr />
        <ins>CONTACT</ins>
        <div class='creator'>
          <div class='wrapper'>
          </div>
          <p><?php echo $row['workshop_assist_1'];?></p>
        </div>
        <div class='creator'>
          <div class='wrapper'>
          </div>
          <p><?php echo $row['workshop_assist_2'];?></p>
        </div>
       
        <button class="register-btn" onclick="location.href='<?php echo $row['register_url']; ?>'">Register</button>

      </div>
      </div>
    </div>

    <?php

  }

} else {

  // Display an error message if there was no result
  echo "Error: Could not find workshop";

}

?>


</body>

</html>