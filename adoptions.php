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
<title>Pet Shop | Adoption</title>
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
	<li class="active"><a href="adoptions.php">Adoptions</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="contact.php">Contact us</a></li>
  </ul>
</div>


                          <br><br><br>  <h1>Adoptions</h1>
                       
    <!-- adopt part css here -->
<?php
$q="SELECT * FROM animals ";
			$result=mysqli_query($con,$q);
			while($row=mysqli_fetch_array($result))
			{
       echo' <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
				<table border="1">
                       <tr><td>
                       <p><h3>Name :'.$row['Name'].'</p>
					   <p>Vaccinated : Yes</p>
                       <p>Breed : '.$row['Breed'].'</p></h3>
                       <p><h3><font color="green"><center>'.$row['Description'].'</center></font></h3></p>
						<img width="400" height="400" src="images/'.$row['Picture'].'">
                        <p></p>
                        <a href="single.php?cod='.$row['anid'].' " class="btn_1"><h1><font color="darkorange">ADOPT ME</font></h1></a></td></tr>
                         
                </div>
            </div>
        </div>
    </section>
	</table>';
			}
    ?>
	 <!-- adopt part css end -->
</body>

</html>