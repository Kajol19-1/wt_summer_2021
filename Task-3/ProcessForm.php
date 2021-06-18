<?php   include "RegistrationForm.php" ; ?>
<?php   include "Controll\Registration_Form.php" ; ?>
<?php 

$validateradio="";
$validatecheckbox="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $validatecheckbox="";
    if(isset($_REQUEST["dancing"]))
    {
        $dancing= $_REQUEST["dancing"];
        $validatecheckbox=$validatecheckbox.$dancing;
    }
    if(isset($_REQUEST["singing"]))
    { 
        $singing= $_REQUEST["singing"];
        $validatecheckbox=$validatecheckbox.",".$singing;
    }
    if(isset($_REQUEST["reading"]))
    {
     $reading= $_REQUEST["reading"];
     $validatecheckbox=$validatecheckbox.",".$reading;
    }


if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}

$target_dir = "files/";
$target_file="files/".$_FILES["uploadfile"]["name"];

if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file))
{
    echo "you have uploaded".$_FILES["uploadfile"]["name"];
    echo "<br>".$_FILES["uploadfile"]["type"];
    echo"<img src='".$target_file."'>";
}
else{
    echo "Sorry, there was an error uploading your file.";
}


}


$formdata = array(
    'fullame'=> $_POST["fullname"],
    'email'=> $_POST["email"],
    'password'=>$_POST["password"],
    'comment'=> $_POST["comment"],
    'gender'=>"$validateradio",
    'hobby'=>"$validatecheckbox",
    "file"=>"$target_file"
   

 );


 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT); 

 if(file_put_contents("data.json", $jsondata)) 
 {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("data.json");
$mydata = json_decode($data);

foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "your ".$key." is ".$value."<br>";
} 
echo "<br>";
}



?>