<?php
include('../Control/Registrationcheck.php')
?>


<!DOCTYPE html>
<html>
<head>
<script src="../js/registration.js"></script>
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
  width: 30%;
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

<body>
<form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<div>
         <legend><b><h1>Registration</b></legend></h1>
         <table>
            <tr>
               <td><b>Username</b></td>
               <td><input type="text" name="username"></td> <td> <p id="errorname"></p></td>
               
            </tr>
            
            <tr>
               <td><b>Password</b></td>
               <td><input type="password" name="password"></td> <td> <p id="errorpassword"></p></td>
            </tr>
            <tr>
               <td><b>Nid No</b></td>
               <td><input type="text" name="nidno"></td> <td> <p id="errornidno"></p></td>
            </tr>
            <tr>
               <td><b>Address</b></td>
               <td><textarea name="address" rows="3" cols="20"></textarea></td> <td> <p id="erroraddress"></p></td>
            </tr>  
       </table>
       <table>
         <b>Gender:</b>
              
               <input type="radio" id="male" name="gender" value="male">
               <label for="male">Male</label>
               <input type="radio" id="female" name="gender" value="female">
               <label for="female">Female</label>
               <input type="radio" id="other" name="gender" value="other">
               <label for="other">Other</label>
               <td> <p id="errorgender"></p></td>
               <tr>
               <td><b>Area</b></td>
               <td><input type="text" name="area"></td> <td> <p id="errorarea"></p></td>
               
            </tr>
         <tr>
         <td><b>Phone</b></td>
         <td> <input type="text" name="phone" ></td> <td> <p id="errorphone"></p></td>
         </tr>
         
            <tr>
               <td><b>Email</b></td>
               <td><input type="email" name="email"></td><br><br> <td> <p id="errormail"></p></td>
            </tr>
            <tr>
            </table>
            Image 
      <input type="file" name="image"  width="50" height="30"><br><br>

            <input type="submit" name="submit" value="Submit">
                     <input type="reset" name="reset" value="RESET">
                  </h3>
               </td>
               <td>&emsp;<a href="login.php">Back to previous page</a></td>
            </tr>

   </form>
</div>
</body>
</html>