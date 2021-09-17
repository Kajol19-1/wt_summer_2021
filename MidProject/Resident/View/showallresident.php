<?php
include "../model/db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$Search=$connection->ShowAll($conobj,"resident");

if ($Search->num_rows > 0) {

    // output data of each row
    while($row = $Search->fetch_assoc()) {

      echo "Username : ".$row["username"]."<br>";
      echo "Password : ".$row["password"]."<br>";
      echo "Nid No : ".$row["nidno"]."<br>";
      echo "Address : ".$row["address"]."<br>";
      echo "Gender : ".$row["gender"]."<br>";
      echo "Area : ".$row["area"]."<br>";
      echo "Gender : ".$row["gender"]."<br>";
      echo "Area : ".$row["area"]."<br>";
      echo "Phone : ".$row["phone"]."<br>";
      echo "email : ".$row["email"]."<br>";
      $image=$row['image'];
      echo "<img src='$image'width=50px >";

    }
}

?>


  <h5><a href="ResidentHome.php">Back</a></h5>