function get(id){
  return document.getElementById(id);
}




function validateForm() {
  var username = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  
  if (username == "" ) {
   document.getElementById("errorname").innerHTML="Please fill out name";
    //return false;
  }
  else{
    document.getElementById("errorname").innerHTML="";
  }

  

 if (password.length<6) 
 {
   document.getElementById("errorpass").innerHTML="Password contains 6 char";
   // return false;
  }
  else 
  {
    document.getElementById("errorpass").innerHTML="";
  }

}