  <!DOCTYPE html>
<html>
  <head>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

    <title>Registration | GDD</title>
	<link rel="icon" href="photos/gdd_logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://kit.fontawesome.com/008ada54cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
      height: 100%;
      line-height: 1.8;
    }

    .w3-bar .w3-button {
      padding: 16px;
    }
    </style>
  </head>
<body>

<!-- Navbar (sit on top) -->
 <!--
   <div class="w3-top"> 
  -->
     <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.html" class="w3-bar-item w3-button w3-wide"><img src="photos/gdd_logo.png" alt="Buildings" width="40" height="27">
    Game Development Days
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="registration.html" class="w3-bar-item w3-button"><i class="fa fa-id-badge"></i><font color="darkgray"> REGISTRATION </font></a>
      <a href="competition.html" class="w3-bar-item w3-button"><i class="fa fa-gamepad"></i> COMPETITION </a>
      <a href="workshops.html" class="w3-bar-item w3-button" ><i class="fa fa-th"></i> WORKSHOPS </a>
      <a href="team.html" class="w3-bar-item w3-button"><i class="fa fa-users"></i> OUR TEAM</a>
    </div>
         
        </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close x</a>
  <a href="https://itgs-ia.w3spaces.com/registration.html" onclick="w3_close()" class="w3-bar-item w3-button">REGISTRATION</a>
  <a href="competition.html" onclick="w3_close()" class="w3-bar-item w3-button"> COMPETITION </a>
  <a href="workshops.html" onclick="w3_close()" class="w3-bar-item w3-button">WORKSHOPS</a>
  <a href="team.html" onclick="w3_close()" class="w3-bar-item w3-button">OUR TEAM </a>
</nav>


<h2 class="w3-center">Join our game development journey by filling the form below and fun with us while learning. </h3>

<table width="907" height="104" border="0">
  <tbody>
    <tr>
      <td width="62">&nbsp;</td>
      <td width="745">
        <?php


@$team_name=$_POST["team_name"];
@$coach=$_POST["coach"];
@$mail=$_POST["mail"];
@$telefon=$_POST["telefon"];
@$ogr_bir=$_POST["ogrenci_bir"];
@$ogr_mail=$_POST["ogr_mail"];
@$ogr_iki=$_POST["ogrenci_iki"];
@$ogr_mail2=$_POST["ogr_mail2"];
@$ogr_uc=$_POST["ogrenci_uc"];
@$ogr_mail3=$_POST["ogr_mail3"];

if ( filter_var($mail, FILTER_VALIDATE_EMAIL)==false ){ 
  $url ="registration.html"; //here you set the url
  $time_out = 3; //here you set how many seconds to untill refresh
  header("refresh: $time_out; url=registration.html");
  echo "<h1>";
  echo '! e-posta gecersiz 3 saniye sonra bir önceki sayfaya yönlendirileceksiniz!';
  echo"</h1>";
}

echo $team_name; 
echo "<br>";
echo $telefon; 
echo "<br>";
echo $mail; 
echo "<br>";
echo $ogr_bir; 
echo "<br>";
echo $ogr_mail; 
echo "<br>";
echo $ogr_iki; 
echo "<br>";
echo $ogr_mail2; 
echo "<br>";
echo $ogr_uc; 
echo "<br>";
echo $ogr_mail3; 
echo "<br>";

?>
<?php
include("baglan.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

@$team_name=$_POST["team_name"];
@$coach=$_POST["coach"];
@$mail=$_POST["mail"];
@$telefon=$_POST["telefon"];
@$ogr_bir=$_POST["ogrenci_bir"];
@$ogr_mail=$_POST["ogr_mail"];
@$ogr_iki=$_POST["ogrenci_iki"];
@$ogr_mail2=$_POST["ogr_mail2"];
@$ogr_uc=$_POST["ogrenci_uc"];
@$ogr_mail3=$_POST["ogr_mail3"];



@$sql = "INSERT INTO members (teamname,coach,d_eposta,d_phone,std_name,std_mail,std_name2,std_mail2,std_name3,std_mail3) VALUES ('$team_name','$coach','$mail','$telefon','$ogr_bir','$ogr_mail','$ogr_iki','$ogr_mail2','$ogr_uc','$ogr_mail3')";

if ($conn->query($sql) == TRUE) {
  echo " ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 header("Refresh:10; url=index.html"); 


?>




</td>
      <td width="26">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#myNavbar" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
      <a href="https://www.fmv.edu.tr/tr-TR/ayazaga-isik-lisesi-fen-lisesi/182" target="_blank">
    <img class="w3-image w3-round-large" src="photos/ISIK.png" width="50" height="50"></a>
      
      <a href="https://www.fmv.edu.tr/" target="_blank">
    <img class="w3-image w3-round-large" src="photos/vakif.png" width="55" height="53">
      </a>
  </div>
 <p class="w3-xsmall">This website was made for academic purposes. </p>
 <p class="w3-small">Copyright © 2023</p>
 </footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
</body>
</html>