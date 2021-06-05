<!DOCTYPE html>
<html>
<body>

<h2 style="color:black;">Resistration From</h2>
<title>Resistrationform</title>
<form action="/action_page.php">
 <label for="fullname">Full Name:</label>
  <input type="text" id="fullname" name="fullname"><br><br>
  <label for="email">  E-mail:    </label>
  <input type="email" id="email" name="email"><br><br>
  <lable for="password">Password:</lable>
  <input type="password" id="password" name="password" Value=""><br>
  <lable for="comment">Comment:</lable><br>
  <textarea name="comment" rows="10" cols="30"></textarea><br>
  <lable for="Gender">Gender:</lable><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>
  <label for="choosehobby">Please choose a hobby</label>
  <input type="checkbox" id="singing" name="singing" value="singing">
  <label for="singing"> Singing</label>
  <input type="checkbox" id="dancing" name="dancing" value="dancing">
  <label for="dancing"> Dancing</label>
  <input type="checkbox" id="reading" name="reading" value="reading">
  <label for="reading"> Reading</label><br>
  <label for="choosefile">Please choose a file</label>
  <input type="file" id="choosefile" name="choosefile"><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form> 

</body>
</html>