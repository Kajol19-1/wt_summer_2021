<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "amerdhaka";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckResident($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 //add function

 function Addresident($conn,$table,$username,$password,$nidno,$address,$gender,$area,$phone,$email,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$username','$password','$nidno','$address','$gender','$area','$phone','$email','$image')");
 return $result;
 }

 function Addroadissue($conn,$table,$issuetype,$location,$details,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$issuetype','$location','$details','$image')");
 return $result;
 }
 function Addlarvaissue($conn,$table,$location,$details,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$location','$details','$image')");
 return $result;
 }
 function Addwaterlog($conn,$table,$location,$details,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$location','$details','$image')");
 return $result;
 }
 function Addillegalstructure($conn,$table,$location,$details,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$location','$details','$image')");
 return $result;
 }
 function Addmosquitoinfected($conn,$table,$affectedperson,$diseasename,$address,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$affectedperson','$diseasename','$address','$image')");
 return $result;
 }
 function Addstreetlight($conn,$table,$issuetype,$location,$details,$image)
 {
$result = $conn->query("INSERT INTO $table VALUES('$issuetype','$location','$details','$image')");
 return $result;
 }
 
//ShowAll  function
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 //search function
 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND username='". $username."'");
    return $result;
 }
 //update function
 function UpdateResident($conn,$table,$username,$nidno,$email,$address,$phone,$password,$gender,$area)
 {
     $sql = "UPDATE $table SET username='$username', email='$email',address='$address',nidno='$nidno',password='$password',gender='$gender',area='$area' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>