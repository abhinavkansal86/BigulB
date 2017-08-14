<!doctype html>
<html>
<head>

<meta charset="utf-8">
 
<title></title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/designs.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="site_background">
<div id="header">

<div id="logo" >
<img src="Untitled.jpg" >
</div>
<div id="menu">
<ul>
  <li><a href="#home">My Playlist</a></li>
  <li><a href="#news">Weekly Top 20</a></li>
  <li spry:hover="dropdown-content"><a href="#">New Releases</a></li>
  <li spry:hover=" dropdown dropdown-content" ><a href="#">Recently Played</a></li>
  <li class="dropdown" style="float:right">
    <a href="#SignIn" class="dropbtn">Sign In <i class="fa fa-angle-down"></i></a>
    <div class="dropdown-content">
      <a href="LoginDemo/WebContent/login.jsp">Login</a>
      <a href="LoginDemo/WebContent/signup.jsp">Sign Up</a>
    </div>
  </li>
</ul>
</div>
<div id="searchbar">
<form action="index.php" >
<input type="text" placeholder="Search Your Song Here..." >
<input type="submit" style="height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" />
</form>
</div>
</div>
<div id="language">
<ul>
<li><a href="hindi.php" >Hindi</a></li>
<li><a href="#">English</a></li>
<li><a href="#">Bengali</a></li>
<li><a href="#">Rajasthani</a></li>
<li><a href="#">Marathi</a></li>
<li><a href="#">Punjabi</a></li>
</ul>
</div>
<div id="data">
<div id="albumshow">
<img src="albumart_import/1493366030060.jpg" onClick="document.getElementById('aH').play(); return false;" onDblClick="document.getElementById('aH').pause(); return false;" >
  <audio controls id="aH">
    <source src="songs/Blood Money - Teri Yaadon Se.mp3" type="audio/ogg">
</audio>
<br>
<br>
<span class="caption">Teri Yaadon Se</span>
</div>
<div id="albumshow"><img src="albumart_import/1493366029878.jpg" >
<span class="caption">Text below the image</span></div>
<div id="albumshow"><img src="albumart_import/1493366029878.jpg" >
<span class="caption">Text below the image</span></div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>
<div id="albumshow">Floating box</div>



</div>
</div>


</body>
</html>