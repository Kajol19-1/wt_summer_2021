<?php
$name="";
$email="";
$Comment="";
$password="";
$comment="";
$validateradio="";
$validatecheckbox="";
$value1=$value2=$value3="";
$validateemail="";
$Password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["name"]; 
$email=$_REQUEST["email"]; 
$Comment=$_REQUEST["comment"];
$Password=$_REQUEST["password"];

if(!empty($name) && strlen($name)>=4) 
{
    $name="Your name is  ".$name;
}

else if(empty($name))
{
    $name="Empty name is not allowed";
}
else if( strlen($name)<4)
{
    $name="Name Must contain at least 3 character !!";
}
/*else if(empty($Name) &&  strlen($Name)<5)
{
    $Name="Invalid Name formate !!";
}
*/


if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please Enter Valid Email";
}
else{
    $validateemail= "Your Email id is ".$email;
}


if(strlen($Password)<5)
{
    $password=" Password Must Contain at least 5 character!!";
}
else{
    $password=$Password;
}



if(strlen($Comment)<10)
{
    $comment=" Comment Must Contain at least 10 character!!";
}
else{
    $comment=$Comment;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= "Gender :".$_REQUEST["gender"];
}
else{
    $validateradio= " Please Select Your Gender";
}



if(!isset($_REQUEST["Dancing"])&&!isset($_REQUEST["Singing"])&&!isset($_REQUEST["Reading"]))
{
    $validatecheckbox = "please selcet at least one options";
    
}
else{
    $validatecheckbox="Your selected hobby is: ";
   if(isset($_REQUEST["Dancing"]))
   {
       $value1= $_REQUEST["Dancing"];
       $validatecheckbox=$validatecheckbox.$value1;
   }
   if(isset($_REQUEST["Singing"]))
   { 
       $value2= $_REQUEST["Singing"];
       $validatecheckbox=$validatecheckbox.",".$value2;
   }
   if(isset($_REQUEST["Reading"]))
   {
    $value3= $_REQUEST["Reading"];
    $validatecheckbox=$validatecheckbox.",".$value3;
   }
   
}




} 
 ?>