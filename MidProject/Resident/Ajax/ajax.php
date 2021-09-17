<!DOCTYPE html>
<html>
<body>

<h2>AJAX</h2>

<input type ="text" id="username";
<input type ="text" id="password";

<button type="button" onclick="MyAjaxFunc()">Request data</button>

<p id="demo"></p>
 
<script>
function MyAjaxFunc() {
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("demo").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/ajaxPost/get_demo.php?username="+username"& password="+password", true);
 
  xhttp.send();
 
}
</script>

</body>
</html>