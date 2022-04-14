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

<head>
<title>Pet Shop</title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="petshop.php">PetShop</a></li>
	 <li><a href="adoptions.php">Adoptions</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="contact.php">Contact us</a></li>
  </ul>
</div>

			<?php
			 $id= $_GET['id'];
				 $q2="UPDATE orderrr SET Confirmed= 1  WHERE oid= ".$id;
				 mysqli_query($con,$q2);
				 echo '<h3><font color ="darkred">Comanda a fost confirmata</h3></font>';
		
			
			?>
		         <a href="admin.php">Inapoi</a>
		</div>

	
</div>
</body>
</html>