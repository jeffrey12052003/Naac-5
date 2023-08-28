<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href = "gammadesign.css" rel = "stylesheet"/>
</head>
<body>
<div class="blurimage" style="background-image: url('space.jpg')"></div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:3.6vw;font-weight:700;left:29%;top:20%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;text-align:center;float:left;">
<i>Enter account details correctly</i></div>
<form method = "POST" action="fpasswordstudentsuccess.php" class="form">
    <input type="text" name="email" placeholder="Student Email" class = "blurtext" style="font-size:20px;top:38%;left:36%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="text" name="name" placeholder="Student Name" class = "blurtext" style="font-size:20px;top:50%;left:36%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type="password" name="password" placeholder="New Password" class = "blurtext" style="font-size:20px;top:62%;left:36%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type = "submit" value = "Reset Password" class = "button1" style ="left:41.5%;top:77%;"> 
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>