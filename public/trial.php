<?php session_start();?>
<html lang="en" >
<head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>ostudio</title>
	     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <link rel="stylesheet" href="../stylesheet/loginstyle.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

       <script src="../javascript/login.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <style>
      *{
        box-sizing:border-box;
        margin:0px;
        padding:0px;
        line-height:auto;

      }

      img{
        max-width:100%;
        display:block;
      }

.avatar_image img{
  width:25px;
  height:25px;
  border-radius:50%;

}
.pages{padding:0 10px;}
#wrapper{
  height:60px;
  max-width:100%;
  display:flex;
  align-items:center;
  justify-content:space-between;
  position:relative;
  background-color: #1fd3c6;
border-bottom: 1px solid #ebebeb;
margin-bottom:10px;


}
.header_div{
  display:flex;
  align-items:center;
  justify-content:space-between;
  width:100%;

}
.holder{
  display:flex;
  align-items:center;
  justify-content:space-between;
  width:60%;
  margin-left:10px;

}
.mobile_nav{
  background:white;
  position: absolute;
  top: 100%;
border-radius:8px;
height:100vh;
width:100vw;
display:none;

}
li.anchors{
  color:grey;
  display:block;
  height:70px;
  width:100%;
}
a{text-decoration:none;color:grey;}
.mobile_navbar{width:100%;}
.anchors a{
  text-decoration:none;
  width:100px;
  display:block;
  color:grey;

}
.welcometest h2{
     color:white;
     line-height:50%;

}
.article_holder{
  display:block;
  margin-bottom:20px;
}
.nav_bars{font-size:1.3rem;color:white;}


      </style>
</head>
<body>
  <div id ="wrapper">
  <header class="header_div">
    <div class="logo_image"> </div>
    <div class="holder">
    <div class="avatar_image">
      <img src="../images/defaultfoto.jpg">
    </div>
    <div class="welcometest">
      <h2><?php echo $_SESSION["user"]["firstname"];?></h2>


    </div>
  </div>
    <div class="burger"> <i class="fas fa-bars nav_bars"></i></div>
    <div class="mobile_nav">
      <nav class="mobile_navbar">
        <ul class="navlist">
          <li class="anchors"><a href="trial.php?request=logout" class="anchorlink">Logout</a></li>
          <li class="anchors"><a href="trial.php?request=passwordchange"class="anchorlink">Password Change</a></li>
          <li class="anchors"><a href="trial.php?request=editprofile"class="anchorlink">Edit Profile</a></li>
        </ul>
        <div class="close">X</div>
      </nav>


    </div>



  </header><!-- end of the logo Area -->
</div>
<div class="pages">
  <?php


if(isset($_GET["request"])):
  $request=$_GET["request"];
else:
  $request="";
endif;
switch($request):
  case "":
  include "j.php";
  break;
  case "logout":
  include "form.php";
  break;
  case "passwordchange":
  include "password.php";
  break;
  case "editprofile":
  include "editprofile.php";
  break;
  default :"j.php";
  break;
endswitch;


  ?>

</div>
<footer class="footer">
  <?php include "footer.php";?>
</footer>


</body>
