<?php
   include "../Control/Logincheck.php";
   if(isset($_SESSION["username"]))
      {
         header("location:../View/ResidentHome.php");
      }
?>
<!DOCTYPE html>
<html>
   <head>
   <script src="../js/login.js"></script>
   <style>
input[type=text] {
  width: 100%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
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
  
  width: 700px;
  padding-left: 5px;
  border: 20px solid green;
  margin: 03px;

}
</style>


     <title>Login Page</title>
</head>
<body>
   <form action=""  onsubmit="return validateForm()" method="post">
      <div>
     
      </center><b><h1>Login</b></h1></center>
         <table>
            <tr>
               <td><h3>Username</h3></td>
               <td><input type="text" name="username"></td><p id="errorname"></p>
               
            </tr>
            
            <tr>
               <td><h3>Password<h3></td>
               <td><input type="password" name="password"></td><p id="errorpass"></p>
            </tr>

            <tr>
               <td>
                  <h3>
                     <input type="submit" name="submit" value="LOGIN"><br>
                     &emsp;<a href="RegistrationForm.php"> Registration</a> 
                  </h3><br><br><br>
               </td>
               <td>&emsp;<a href="MainPage.php">Back to previous page</a></td>
            </tr>
            <?php echo $error; ?>
         </table>
   </form>
</div>
</body>
</html>