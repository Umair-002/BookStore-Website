<link href="css/main.css" rel="stylesheet"/>

<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="index.html">Blog</a></li>
			<li><a href="index.html">Contact Us</a> </li>
		</ul>

	</nav> 

<?php
$h= isset($_POST["h"]) ? $_POST["h"] : "";

if($h == 1){
  //access db and insert rec

  


  $conn = mysqli_connect("localhost", "root", "", "creditcard");



$v2 = md5('cardnumber'); //ccnum
$v4 = $_POST['cvv'];
$cardnumber = $_POST['cardnumber'];
$masked = str_pad(substr($cardnumber, -4), strlen($cardnumber), '*', STR_PAD_LEFT);

$m = $_POST['expirymonth']; 
$y = $_POST['expiryyear'];
$date = new dateTime();
$date->setDate($y, $m, 1);
$date->modify('+1 month -1 day');
$v3 = $date->format('y-m-d');





$sql = "INSERT INTO card(ccnum, expdate, seccode) VALUES('$v2','$v3','$v4')";

if (mysqli_query($conn,$sql)){
  echo "<h3> new record created successfully Your card number ends in $masked has been saved </h3>";
} else {
  echo "error: " . $sql . "<br>" . mysqli_connect($conn);
}

}
  if ($h == -1){

    header("Location: try.php");
  }

?>

