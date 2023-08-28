<!DOCTYPE html>
<html>
<head>
<link href = "gammadesign.css" rel = "stylesheet"/>
<style>
    body{
        background-color:#51F3B7;
    }
div.gallery {
  margin: 3px;

  float: left;
  width:47%;
}

div.gallery:hover {
  border: 3px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  background-color:#F39A51;
}
</style>
</head>
<body bgcolor="#FAF18B">
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "frontpage.php">Home</a>
        <a href = "gallery.php">Gallery</a>
        <a href = "dummy.html">Infrastructure</a>
        <a href="dummy.html" style="float: right;">Login/Sign Up</a>
    </nav>
<div style = "padding-left:20px;">
<div class="gallery" style = "width:46.85%">
  <a href="#">
    <img src="gallery/groundfloor.jpg" alt="Gfloor" width="980" height="980">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery" style="">
  <a href="#">
    <img src="gallery/secondfloor.png" alt="lab2" width="1000" height="1000">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a href="#">
    <img src="gallery/front.jpg" alt="Home" width="1000" height="1000">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a href="#">
    <img src="gallery/class.jpg" alt="class" width="1000" height="1000">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
</div>
</body>
</html>


