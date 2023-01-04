<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XSS Medium</title>
    <link rel="stylesheet" href="assets/css/navrooms.css">
    <link rel="stylesheet" href="assets/css/xss.css">
    <link rel="stylesheet" href="assets/css/body.css">
    <link rel="stylesheet" href="assets/css/xss-buttons.css">
    <link rel="stylesheet" href="assets/css/labs-button.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
  </head>

  <body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
      <div style="display:none;" id="myDiv" class="animate-bottom">
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header><b>Rooms</b></header>
    <ul>
     <li><a href="index.html"><i class="fas fa-qrcode"></i><b>Home</b></a></li>
     <li><a href="xss.html"><i class="fas fa-link"></i><b>XSS</b></a></li>
     <li><a href="sql.html"><i class="fas fa-stream"></i><b>SQL</b></a></li>
     <li><a href="cmd.html"><i class="fas fa-calendar-week"></i><b>CMD</b></a></li>
    </ul>
   </div>

    <div style="background-image: url(contact-bg.jpg);padding:20px;" align="center">
      <h1 align="center">Think More!!</h1>
      <form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="submit" value="Submit">
</form>
  </div>
  <div style="background-color:transparent; color:#f1ba06;"; padding:20px;border-radius:0px 0px 20px 20px" align="center">
  <?php
if (isset($_GET["username"])) {
 	$user = str_replace("<script>", "",$_GET["username"]);
	echo "Your name is "."$user";
}
?>

  </div>


  <script src="assets/js/types_xss.js"></script>
  <script>
    var myVar;
    
    function myFunction() {
      myVar = setTimeout(showPage, 1500);
    }
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }

    
    </script>

  </body>
</html>



