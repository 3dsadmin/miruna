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
<br>
<br>
<br>
<br>
		<center>
			<?php
			 echo"<center><table border='1' color='black'><tr align='center'><td>Order Id</td>
                   <td>Animal</td>
                   <td>ClientName</td>
				   <td>Phone Number</td>
                   <td>OrderDate</td>
				   <td>Breed</td>		 
				   <td>Status</td></tr>
                   ";
	         $q="SELECT * FROM adoption WHERE Confirm = 0";
			 $result= mysqli_query($con,$q);
			 while($row= mysqli_fetch_array($result))
			 {
				 $q1=" SELECT Name FROM animals WHERE anid= ".$row['anid'];
				 $result1= mysqli_query($con,$q1);
				 $row1= mysqli_fetch_array($result1);
				 echo "<tr><td>".$row['adid']."</td>
                           <td>".$row1['Name']."</td>	
                            <td>".$row['AdoptionClient']."</td>
							   <td>".$row['PhoneNo']."</td>
							    <td>".$row['Breed']."</td>
							    
						 
                            <td>".$row['Confirm']."</td>						
                                <td><a href ='confirman.php?id=".$row['adid']."'>CONFIRMA</a></td></tr>";							   
			 }
			?>
		    </table>
		</center>
</body>
</html>