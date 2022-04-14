<?php
$host="localhost";
$user="root";
$pas="";
$dbname="adapost";

$con=mysqli_connect("$host","$user","$pas","$dbname");
if(mysqli_connect_errno())
{
echo'Eroare conexiune server BD';
echo mysqli_connect_errno();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Pet Shop | Contact</title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
    <li><a href="index.php">Home</a></li>
    <li><a href="petshop.php">PetShop</a></li>
	<li><a href="adoptions.php">Adoptions</a></li>
    <li><a href="about.php">About us</a></li>
    <li class="active"><a href="contact.php">Contact us</a></li>
  </ul>
</div>
<div id="body">
  <div id="content">
    <div class="content">
	<ul class="connect">
	   <li><table><tr><td>


      <td><h2>Contact us</h2>
          <p> <span>E-mail: <a href="#">miruna8415@gmail.com</a></span> <span>Call or e-mail us for help with any aspect of your purchase, online or offline.</span> </p>
          <p> <span>Call toll-free: 877 000 0000</span> <span>Call toll-free: 866 000 0000</span> <span>Call toll-free: 877 000 0000</span> </p>
        </li>
        <li>
          <h2>Store Hours</h2>
          <p> <span>monday to Friday 9:00 am - 7:00 pm EST (GMT -05000)</span> <span>Closed Saturday and Sunday</span> </p>
        </li>
        <li>
          <h2>Mailing Address</h2>
          <p> <span>Petshop,</span> <span>250 Lorem Ipsum Street,</span> <span>4th Floor,</span> <span>jaonfanr, Caknan 109935,</span> <span>Kiangab</span> </p>
        </li>
      </ul>
    </div>
  </div>

</div></td></tr></table>
  
</body>
</html>
