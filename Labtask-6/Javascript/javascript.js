function get(id){
  return document.getElementById(id);
}

function validateGender(){
  var gender = document.getElementsByName("gender");
  var checked = false;
  for(var i=0;i<gender.length;i++){
      if(gender[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}
function validateHobby(){
  var hobby = document.getElementsByName("hobby[]");
  var checked = false;
  for(var i=0;i<hobby.length;i++){
      if(hobby[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}


function validateForm() {
  var Name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var email = document.getElementById("email").value;
  var comment = document.getElementById("comment").value;
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  
  if (Name == "" ) {
   document.getElementById("errorname").innerHTML="Please fill-up your full name";
 
  }
  else{
    document.getElementById("errorname").innerHTML="";
  }

  if(!res)
  {
    document.getElementById("errormail").innerHTML="Please enter correct email formate";
   
  }
  else
  {
    document.getElementById("errormail").innerHTML="";
  }

 if (password.length<5) 
 {
   document.getElementById("errorpass").innerHTML="Password Must Contain at least 5 character!";
   
  }
  else 
  {
    document.getElementById("errorpass").innerHTML="";
  }

  if (comment.length<10) {
    document.getElementById("errorcomment").innerHTML="Comment Must  Contain at least 10 character!";
   
   }
   else 
   {
    document.getElementById("errorcomment").innerHTML="";
   }

   if(validateGen()==false)
   {
     document.getElementById("errorgen").innerHTML="gender is requried";
   
   }
   else{
    document.getElementById("errorgen").innerHTML="";
   }

   if(!get("Singing").checked && !get("Dancing").checked && !get("Reading").checked){
    hasError=true;
    document.getElementById("errorhobby").innerHTML="At Least One Hobby must berequried";
    return false;
}

else 
{
  document.getElementById("errorhobby").innerHTML=" ";
}


}


