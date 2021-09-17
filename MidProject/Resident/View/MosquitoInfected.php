<?php
  include "../Control/mosquitoinfectedcheck.php";
   if(isset($_SESSION["address"]))
      {
         header("location: ");
      }
?>
<!DOCTYPE html>
<html>
<head>
   <style>
input[type=text] {
  width: 50%;
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

   <title>MosquitoInfected</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
      <div>
      <left> <b><h1 style="color:red;">Patiant Report</h1></b></left>
        
               <b>Affected Person</b>
               <input type="text" name="affectedperson"><br><br>
               
            

            <b>Disease Name</b>
              <br>
               <input type="radio" id="dengue" name="diseasename" value="dengue">
               <label for="dengue">Dengue</label><br>
               <input type="radio" id="chikungunya" name="diseasename" value="chikungunya">
               <label for="chikungunya">Chikungunya</label><br>
               <input type="radio" id="malaria" name="diseasename" value="malaria">
               <label for="malaria">Maleria</label><br>
               <input type="radio" id="zikavirus" name="diseasename" value="zikavirus">
               <label for="zikavirus">Zika Virus</label><br>
        
               <b>Address</b>
               <textarea name="address" rows="3" cols="20"></textarea><br> 
         
          <br>

   
          Image 
      <input type="file" name="image"  width="50" height="30"><br><br>

     
            <input type="submit" name="add" value="Submit">
                     <input type="reset" name="reset" value="RESET">
                 
             <a href="RaiseIssue.php">Back to previous page</a>
          
          
   </form>
</div>
</body>
</html>