
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
			
			 $OrderDate= date("Y-m-d"); 
			
			$q="SELECT max(oid) as maxim FROM orderrr";
			$result=mysqli_query($con,$q);
			$row=mysqli_fetch_array($result);
			
			if(mysqli_num_rows($result)==0)
				$maxid=1;
			else
				$maxid= $row['maxim']+1;
		     $oid= $maxid;
			 
				 $cid= $_POST['PID'];
		 $Items= $_POST['BUC'];
		 $TotalPrice= $Items * $_POST['PRET'];
			
			echo '<form method="POST" action="finorder.php">';
			echo '<br><input type="textbox" name="NAME" placeholder="Your Name">';
			echo '<br><input type="textbox" name="ADDRESS" placeholder="Delivery Adress">';
			echo '<br><input type="textbox" name="PHONENO" placeholder="Phone Number">';
			echo '<br><input type="textbox" name="STARTDATE" placeholder="Date">';
			echo '<br><input type="hidden" name="CID" value='.$cid.'>';
			echo '<br><input type="hidden" name="ITEMS" value='.$Items.'>';
			echo '<br><input type="hidden" name="TOTALPRICE" value='.$TotalPrice.'>';
			echo '<br><input type="hidden" name="OID" value='.$oid.'>';
			echo '<br><input type="hidden" name="ORDERDATE" value='.$OrderDate.'>';
			echo '<br><input type="submit" name="BUTON" value="Confirm Order">';
			
			echo '</form>';
			
			
			
			
			
			?>
		
		
</body>
</html>