<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatecheckbox="";
$validateradio="";
$singing=$dancing=$reading="";
$name=$email=$password=$gender="";
if(isset($_POST["registrationform"]))
{
$name=$_REQUEST["fullname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
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

}
?>