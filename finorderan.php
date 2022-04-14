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
<div id="content">
		</div>
		<div id="rightside"> </div>
<br>
<br>
			<?php
			error_reporting(0);
			ini_set('display_errors',0);
			$n= 1;
	         $q="SELECT Donate FROM animals WHERE anid = ".$_POST['CID'];
			 $result=mysqli_query($con,$q);
			 $row=mysqli_fetch_array($result);
			 
	         
			 $stoc= $row['Donate'];
			 if( $stoc >= 1)
			 {
				  
				 $q1="INSERT INTO adoption VALUES (".$_POST['AID'].", ".$_POST['CID']." ,'".$_POST['NAME']."' ,'".$_POST['BE']."' , '".$_POST['DATE']."' , '".$_POST['PHONE']."',0)";
				 mysqli_query($con,$q1);
				  $q2="UPDATE animals SET Donate= Donate - ".$n."  WHERE anid= ".$_POST['CID'];
				 mysqli_query($con,$q2);
				 echo '<br><br><br><h3><font color ="darkred">The order was placed</h3></font>';
			 }
		     else echo '<h3><font color="darkred"><i>This animal was already adopted</i></h3></font>';
			  echo '<a href="adoptions.php">Back to shopping</a>';
			?>
		
</div>
</body>
</html>