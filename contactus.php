<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>
        window.alert("Your message has been delievered sucessfully");
    </script>
    <title>Contact Us</title>
</head>
<body>
<header>
      <div class="navbar">
        <div class="logo">
          <img src="" alt="" class="logo_img" />

          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="cryptocurrency.html">Cryptocurrencies</a></li>
            <li><a href="about-us.html">About-us</a></li>
            <li><a href="contact-us.html">Contact-us</a></li>
          </ul>
        </div>

        <div class="title">
          <p>Cyber Technology</p>
          <p class="title_p">Technology-ERA</p>
          <p class="title_p2">
            Learning how cryptocurrency works is like learning a new language It
            <br />
            is incredibly difficult at the beginning <br />
            but once it clicks it will stick with you forever.
          </p>
          <div class="button"><a href="cryptocurrency.html" class="button_link">Explore</a></div>
        </div>

        <a href="https://bitcoin.org/en/" target="_blank" style="cursor: pointer;"><img src="Images/bitcoin.png" class="pic" alt="" style="border: solid rgb(207, 178, 10);" /></a>
        
        
      </div>

     
      </div>
    </header>

    <footer class="footer-distributed">

			<div class="footer-left">
         
				<h3>About<span> <br>  <img src="Images/bitcoin.png" style="width: 30px; height: 30px;"> CryptoX</span></h3>

				<p class="footer-links">
					<a href="index.html">Home</a>
					|
					<a href="cryptocurrency.html">Cryptocurrencies</a>
					|
					<a href="about-us.html">About</a>
					|
					<a href="contact-us.html">Contact</a>
				</p>

				<p class="footer-company-name">© 2021 CryptoX Ltd.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>H10, Islamabad, 44000
						 International Islamic Univeristy Islamabad</span>
						Pakistan</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+92 331-1234567</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mahdulhaq85@gmail.com">support@CryptoX.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					We Provide information on Crpyocurrencies and its exchanges.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>

</body>
</html>

<?php

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Message = $_POST['message'];
$Notification = $_POST['notification'];

//connection with databse

$conn = new mysqli('localhost','mehranabbas','mehranabbas@1999','weeklynews');

if($conn->connect_error)
{
    die('Connection failed please fix the problem' .$conn->connect_error);
}

else
{
    $stmp = $conn->prepare("insert into registeration (Name, Email, Phone, Message,Notification) values(?,?,?,?,?)");

    $stmp->bind_param("sssss",$Name,$Email,$Phone,$Message,$Notification);
    $stmp->execute();
    echo ("<p><h2> your message has been  delivered sucessfully</h2> </p>");
   
}

?>