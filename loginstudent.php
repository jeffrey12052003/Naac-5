<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href = "gammadesign.css" rel = "stylesheet"/>
<script>  
function validateform(){  
var email=document.form.email.value;  
var password=document.form.password.value;  
var x = email.indexOf('@');
var y = email.lastIndexOf('.');
if (email==null || email==""){  
  alert("Email can't be blank");  
  return false;  
}else if(password.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
}  
</script>
</head>
<body>
<div class="blurimage" style="background-image: url('bcimage2.jpg')"></div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:3.6vw;font-weight:700;left:41%;top:20%;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px black;text-align:center;float:left;">
<i>Student Login</i></div>
<form name = "form" method = "POST" action="loginstudentsuccess.php" class="form" onsubmit="return validateform()">
    <input type="text" name="email" placeholder="Student Email" class = "blurtext" style="font-size:20px;top:38%;left:36%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="password" name="password" placeholder="Password" class = "blurtext" style="font-size:20px;top:50%;left:36%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type = "submit" value = "Submit" class = "button1" style ="left:41.5%;top:65%;"> 
</form>
<a href="fpasswordstudent.php"><button class = "button" style = "left:45.25%;top:79%;width:12.5%;height:10%;padding-top:0.47vw;padding-bottom:0.47vw;">Forgot password?</button></a>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>