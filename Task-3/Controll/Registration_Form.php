<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatecomment="";
$validatecheckbox="";
$validateradio="";
$singing=$dancing=$reading="";
$name=$email=$password=$comment=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fullname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$comment=$_REQUEST["comment"];
if(empty($_REQUEST["fullname"]) || (strlen($_REQUEST["fullname"])<3))
{
    $validatename= "you must enter fullname";

}
else
{
    $name=$_REQUEST["fullname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<8))
{
    $validatepassword= "please provide your correct password";
}
else
{
    $password=$_REQUEST["password"];
}
if(strlen($comment)<20)
{
    $validatecomment=" Comment Must Contain 10 character!!";
}
else{
    $validatecomment=$comment;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one option";
}
if(!isset($_REQUEST["singing"])&&!isset($_REQUEST["dancing"])&&!isset($_REQUEST["reading"]))
{
    $validatecheckbox = "please select at least one option";
    
}

else{
   if(isset($_REQUEST["singing"]))
   {
       $singing= $_REQUEST["singing"];
   }
   if(isset($_REQUEST["dancing"]))
   { 
       $dancing= $_REQUEST["dancing"];
   }
   if(isset($_REQUEST["reading"]))
   {
    $reading= $_REQUEST["reading"];
   }
}

   $target_dir = "files/";
   $target_file="files/".$_FILES["uploadfile"]["name"];

   if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file))
   {
       echo "you have uploaded".$_FILES["uploadfile"]["name"];
       echo "<br>".$_FILES["uploadfile"]["type"];
       echo"<img src='".$target_file."'>";
   }
   else{
       echo "Sorry, there was an error uploading your file.";
   }
}
?>