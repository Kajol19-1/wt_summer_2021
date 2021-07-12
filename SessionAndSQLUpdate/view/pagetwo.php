<?php

session_start(); 
include('../control/updatecheck.php');



if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>




<!DOCTYPE html>
<html>
<body>


<h2>Profile Page</h2>

<br><br>
<?php
$User="";
$username="";
$radio1=$radio2=$radio3=$password=$address=$dob=$Profession1=$Profession2=$Profession3=$Inte1=$Inte2=$Inte3="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $password=$row["password"];
      $address=$row["address"];
      $username=$row["username"];
      $email=$row["email"];
      $dob=$row["dob"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

      if($row["profession"]=="Academician")
      {
        $Profession1="selected";
      }
      if($row["profession"]=="student")
      {
        $Profession2="selected";
      }
      if($row["profession"]=="Business")
      {
        $Profession3="selected";
      }
     

      if($row["interests"]=="music")
      {
        $Inte1="checked";
      }
      if($row["interests"]=="sports")
      {
        $Inte2="checked";
      }
      if($row["interests"]=="reading")
      {
        $Inte3="checked";
      }
    $dob=$row["dob"];


  } 
}
  else {
    echo "0 results";
  }







?>
<form action='' method='post'>


firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" ><br><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" ><br><br>
email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
Address: <textarea rows="5" cols="30" name="address"> <?php echo $address; ?> </textarea><br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other <br><br>


Profession: 
<select >
Profession:
    <option value="Academician" <?php echo $Profession1; ?>>Academician</option>
    <option value="student"<?php echo $Profession2; ?>>Student</option>
    <option value="Business" <?php echo $Profession3; ?>>Business</option>
    </select><br><br>

Interest : 

<input type="checkbox"  name="music" value="music" <?php echo $Inte1;?>> music
<input type="checkbox" name="sports" value="sports"<?php echo $Inte2;?>>sports
<input type="checkbox" name="reading" value="reading"<?php echo $Inte3;?>>reading <br><br>

DOB</td>
 <input type="date" name="dob" value="<?php echo $dob; ?>" ><br><br>


     <input name='update' type='submit' value='Update'>  <br><br>

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>