<?php
  include "../Control/Roadcheck.php";
  if(isset($_SESSION["username"]))
      {
         header("location: ");
      }
?> 
<!DOCTYPE html>
<html>
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
   <title>Road</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
   <div>
   <left> <b><h2 style="color:red;">Road Issue</h2></b></left>
         <table>
             <b>Issue Type:</b>
              <br>
               <input type="radio" id="manhole" name="issuetype" value="manhole">
               <label for="manhole">Manhole</label>
               <input type="radio" id="roadsurface" name="issuetype" value="roadsurface">
               <label for="roadsurface">Road Surface</label>
               <input type="radio" id="footpath" name="issuetype" value="footpath">
               <label for="footpath">Footpath</label><br>
            <table>
               <tr>
               <td><b>Location</b></td>
               <td><textarea name="location" rows="3" cols="20"></textarea></td>
               </tr>
            <tr>
               <td><b>Details</b></td>
               <td><textarea name="details" rows="3" cols="20"></textarea></td>
            </tr>
          </table>

          Image 
      <input type="file" name="image"  width="50" height="30"><br><br>

            <input type="submit" name="add" value="ADDISSUE">
                     <input type="reset" name="reset" value="RESET">
                  </h3>
               </td>
               <td>&emsp;<a href="RaiseIssue.php">Back to previous page</a></td>
            </tr>
         </table>
   </form>
</div>
</body>
</html>