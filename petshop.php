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
	
			<?php
	
	
			$q="SELECT * FROM products ";
			$result=mysqli_query($con,$q);
			while($row=mysqli_fetch_array($result))
			{ 
	
				echo'<hr><font color="darkblue">'.$row['Pname'].'</font></hr>';
				echo '<center><br><img width="250" height="150" src="products/'.$row['Picture'].'">'; 
				echo '<br><font color="lightgray">'.$row['Items'].'</font>';
				echo '&nbsp; &nbsp; &nbsp <strong>'.$row['Price'].'$$</strong>';
				echo '<br><a href="singlep.php?cod='.$row['cid'].'">Order</a>';
			    echo '<br>'.$row['Description'];
				
			
			}
		?>
	
</div>
</body>
</html>