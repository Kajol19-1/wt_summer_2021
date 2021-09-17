<?php
  include "../Control/waterlogcheck.php";
   if(isset($_SESSION["location"]))
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
   <title>Mosquitolarva</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
   <div>
    
   <left> <b><h1 style="color:red;">Waterlog </h1></b></left>
       
            <tr>
               <td><b>Location:</b></td>
               <td><textarea name="location" rows="3" cols="20"></textarea></td><br><br>
               
            </tr>
            <tr>
               <td><b>Details:</b></td>
               <td><textarea name="details" rows="3" cols="20"></textarea></td><br><br>
            </tr>
            <tr><td><b>Image:</b> <br>
      <input type="file" name="image"  width="50" height="30"><br><br></td></tr>

            <input type="submit" name="add" value="ADDISSUE">
                     <input type="reset" name="reset" value="RESET">
                 
              
             <a href="RaiseIssue.php">Back to previous page</a>
           
   </form>
</div>
</body>
</html>