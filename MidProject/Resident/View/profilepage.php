<?php

session_start(); 
include "../Control/SearchUser.php";
include('../Control/updateresident.php');



if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location:../View/login.php"); // Redirecting To Home Page
}

?>




<!DOCTYPE html>
<html>
<body>


<left> <b><h3 style="color:red;">Profile page<h3></b></left>

<br><br>
<?php
$User="";
$username="";
$radio1=$radio2=$radio3=$password=$address=$idno=$area1=$area2=$area3=$area4=$area5=$area6="";
$phone=$email="";
$connection = new db();
$conobj=$connection->OpenCon();
//

//$searchQuery=$connection->searc
if(isset($_POST['Search']))
{
  $User=$_REQUEST['username'];
  $userQuery=$connection->Search($conobj,"resident",$User);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $username=$row["username"];
      $password=$row["password"];
      $address=$row["address"];
      $nidno=$row["nidno"];
      $email=$row["email"];
      $phone=$row["phone"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

      if($row["area"]=="Uttara")
      {
        $area1="selected";
      }
      if($row["area"]=="Bashundhara")
      {
        $area2="selected";
      }
      if($row["area"]=="Mirpur")
      {
        $area3="selected";
      }
      if($row["area"]=="Hatirjheel")
      {
        $area4="selected";
      }

      if($row["area"]=="Badda")
      {
        $area5="selected";
      }
      if($row["area"]=="Mohakhali")
      {
        $area6="selected";
      }


  } 
}
  else {
    echo "0 results";
  }
}






?>
<head>
   <style>
input[type=text] {
  width: 30%;
  padding: 5px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: lightgreen;
}

div{
  background-color: lightyellow;
  
  width: 600px;
  padding-left: 3px;
  border: 20px solid green;
  margin: 03px;

}
</style>
<form action='' method='post'>
<div>

<input type='hidden' name='username' value="<?php echo $username; ?>" >
Password : <input type='text' name='password' value="<?php echo $password; ?>" ><br><br>
email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
Address: <textarea rows="5" cols="30" name="address"> <?php echo $address; ?> </textarea><br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other <br><br>


Area: 
<select name="area" >
<option > </option>
<optgroup label="area">
	  <option value="uttara" <?php echo $area1; ?>>Uttara</option>
    <option value="bashundhara"<?php echo $area2; ?>>Bashundhara</option>
    <option value="mirpur" <?php echo $area3; ?>>Mirpur</option>
    <option value="hatirjheel" <?php echo $area4; ?>>Hatirjheel</option>   
    <option value="badda" <?php echo $area5; ?>>Badda</option>  
    <option value="mohakhali" <?php echo $area6; ?>>Mohakhali</option>  
    </select><br><br>

Nid No:</td>
 <input type="number" name="nidno" value="<?php echo $nidno; ?>" ><br><br>
 Phone</td>
 <input type="text" name="phone" value="<?php echo $phone; ?>" ><br><br>


     <input name='update' type='submit' value='Update'>  <br><br>

     <?php echo $error; ?>
<br>
<br>
<a href="../View/login.php">Back </a>

<a href="../Control/logout.php"> logout</a>
</div>
</body>
</html>