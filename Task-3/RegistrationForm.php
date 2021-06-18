<?php include "controll/Registration_Form.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="ProcessForm.php" method="post" enctype="multipart/form-data">
Full Name: <input type="text" name="fullname"> <?php echo $validatename; ?>
<?php echo $name; ?>
<br>
<br>
E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
<br><br>
Password: <input type="password" name="password"> <?php echo $validatepassword; ?>
<?php echo $password; ?>
<br><br>
Comment:<br><textarea name="comment" rows="10" cols="30"></textarea> <?php echo $validatecomment; ?><br><br>

Please select your gender:
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br>
  <?php echo $validateradio; ?>
<br>

Please choose a hobby
<input type="checkbox" id="singing" name="singing" value="Singing">
 Singing
<input type="checkbox" id="dancing" name="dancing" value="Dancing">
Dancing
<input type="checkbox" id="reading" name="reading" value="Reading">
 Reading
<br>
<?php echo $validatecheckbox; ?>

<?php echo $singing;?>

<?php echo $dancing;?>

<?php echo $reading;?>
<br>
<label for="uploadfile">Please choose a file</label>
<input type="file" id="uploadfile" name="uploadfile"><br><br>

<td> <input type="submit" name="Submit"> 
<input type="reset" value="RESET">
</form>
</body>
</html>