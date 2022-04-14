
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

<!doctype html>

<html>
<head>
<title>Pet Shop | PetMart</title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="petshop.php">PetShop</a></li>
	<li><a href="adoptions.php">Adoptions</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="contact.php">Contact us</a></li>
  </ul>
</div>
			<?php
			error_reporting(0);
			ini_set('display_errors',0);
			
			$id= $_GET['cod'];
			 $q="SELECT *
			FROM animals
			WHERE anid= ".$id;
			$result=mysqli_query($con,$q);
			$row=mysqli_fetch_array($result);
						 
			 
			echo'<hr><font color="darkblue">'.$row['Name'].'</font></hr>';
			echo '<center><br><img width="250" height="150" src="images/'.$row['Picture'].'">'; 
			echo '<form method="POST" action="orderan.php">';
			echo '<input type="hidden" name="A" value="'.$row['Name'].'">';
			echo '<input type="hidden" name="B" value="'.$row['Breed'].'">';
	        echo '<br><input type="hidden" name="PID" value='.$id.'>';
			echo '<br><input type="submit" name="BUTON" value="Confirm Order">';
			
			echo '</form>';
			
			
			
			?>
		
		
</body>
</html>