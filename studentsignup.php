<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href = "gammadesign.css" rel = "stylesheet"/>
    <script>  
function validateform(){  
var email=document.form.email.value;  
var password=document.form.password.value; 
var rno = document.form.rno.value;
var repassword = document.form.repassword.value;
var name = document.form.name.value;
var department = document.form.department.value;
var allowedExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            var fileExtension = document.getElementById('file1').value.split('.').pop().toLowerCase();
            var isValidFile = false;
                for(var index in allowedExtension) {

                    if(fileExtension === allowedExtension[index]) {
                        isValidFile = true; 
                        break;
                    }
                }

                if(!isValidFile) {
                    alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));
                    return isValidFile;
                }


if (email==null || email==""){  
  alert("Email can't be blank");  
  return false;  
}else if(password.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
}else if(rno.length!=10){
    alert("Invalid Register Number");
    return false;
}
else if(password != repassword){
    alert("Passwords don't match each other!");
    return false;
}
else if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if (department==null || department==""){  
  alert("Department can't be blank");  
  return false;  
}
}  
</script>
</head>
<body>
<div class="blurimage" style="background-image: url('bcimage2.jpg')"></div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:3.6vw;font-weight:700;left:38%;top:15%;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px black;text-align:center;float:left;">
<i>Enter Your details</i></div>
<form name = "form" method = "POST" action="studentsignupsuccess.php" class="form" onsubmit="return validateform()" enctype = "multipart/form-data">
<input type="text" name="rno" placeholder="Register Number" class = "blurtext" style="font-size:20px;top:35%;left:18%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="text" name="email" placeholder="Student Email" class = "blurtext" style="font-size:20px;top:35%;left:54%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="text" name="name" placeholder="Student name" class = "blurtext" style="font-size:20px;top:50%;left:18%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="text" name="department" placeholder="Department" class = "blurtext" style="font-size:20px;top:50%;left:54%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="password" name="password" placeholder="Password" class = "blurtext" style="font-size:20px;top:65%;left:18%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="password" name="repassword" placeholder="Re-Enter Password" class = "blurtext" style="font-size:20px;top:65%;left:54%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:1.9vw;font-weight:700;left:15%;top:78%;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px black;text-align:center;float:left;">
<i>Profile Picture:</i></div>
    <input type = "file" name = "file1" id = 'file1' class = 'blurtext' style="font-style:italic;font-size:1.58vw;top:74%;left:30%;height:3.17vw;padding:2vw;border-radius:1.58vw;text-align:center;width:30%;color:white;" class = "form"><br>
    <input type = "submit" value = "Submit" class = "button1" style ="left:41.5%;top:85%;"> 
</form>
</body>
</html>