<?php
// including the database connection
include "../config/connection.php";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Project</title>
     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">

    <!--  <link rel="stylesheet"  type="text/css"  href="../stylesheet/newcss.css">-->
        <link rel="stylesheet"  type="text/css"  href="../stylesheet/newcss.css">

     <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="../javascript/java.js"></script>
     <script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
      <!--<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>-->
<script src="../javascript/app.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <style>

  </style>
</head>
<body >

<?php include "indexPrototype.php";?>
<!-- end of the page header -->
<section class="hero_section">
<div class="small_lightbox"><div id="img_holder"><img src="https://images.pexels.com/photos/167528/pexels-photo-167528.jpeg?w=640&h=427&auto=compress&cs=tinysrgb"></div><span class="box"><p class="page_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></span></div>
<aside class="page_aside">

<div class="little_foto_gallery">
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/60708/sensual-sexy-glamur-fashion-60708.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/167528/pexels-photo-167528.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
<figure class="model_images">
<img src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?w=640&h=427&auto=compress&cs=tinysrgb">
</figure>
</div>
</aside>

</section>
<!-- end of hero section -->
<div class="crew_holder_image"><div class="crew_grid"><span class="crew_class">X</span><img src="../images/girl.jpeg"><span class="crew_name"></span>
<p class="text">Head Designer</p><p class="autor">Gerd Wagner is a researcher, instructor and a passionate developer who started to code with Pascal and BASIC in the 1980s, and then used Prolog and C++ in the 1990s, Java, PHP and JavaScript in the 2000s, when he increasingly learned to love JavaScript for its unique blend of OO, functional and dynamic programming.</p></div></div>
<section class="crew">
<div class="crew_image_holder">
<figure class="crew_image">
<img src="../images/girl.jpeg">
<figcaption class="caption">
<span class="crew_name">Mary james</span>
<p class="text">Head Designer</p>
<p class="designer_description">Gerd Wagner is a researcher, instructor and a passionate developer who started to code with Pascal and BASIC in the 1980s, and then used Prolog and C++ in the 1990s, Java, PHP and JavaScript in the 2000s, when he increasingly learned to love JavaScript for its unique blend of OO, functional and dynamic programming.</p>

</figcaption>
<span class="blicker"><h4>+</h4></span>
</figure>
<figure class="crew_image">
<img src="../images/girl.jpeg">
<figcaption class="caption">
<span class="crew_name">Herry james</span>
<p class="text">Head Designer</p>
<p class="designer_description">Gerd Wagner is a researcher, instructor and a passionate developer who started to code with Pascal and BASIC in the 1980s, and then used Prolog and C++ in the 1990s, Java, PHP and JavaScript in the 2000s, when he increasingly learned to love JavaScript for its unique blend of OO, functional and dynamic programming.</p>

</figcaption>
<span class="blicker"><h4>+</h4></span>
</figure>
<figure class="crew_image">
<img src="../images/girl.jpeg">
<figcaption class="caption">
<span class="crew_name">Johnas John</span>
<p class="text">Head Designer</p>
<p class="designer_description">Gerd Wagner is a researcher, instructor and a passionate developer who started to code with Pascal and BASIC in the 1980s, and then used Prolog and C++ in the 1990s, Java, PHP and JavaScript in the 2000s, when he increasingly learned to love JavaScript for its unique blend of OO, functional and dynamic programming.</p>
</figcaption>
<span class="blicker"><h4 >+</h4></span>
</figure>

</div>
</section>
<!-- end of crew area -->
<div class="contact_area">
<form method="POST" id="contact" action="contact.php">
<p class="contact_note">CONTACT FORM</p>
<div class="inputBox">
<input type="text"  name="firstname" class="field">
<label>Firstname</label>
</div>
<div class="inputBox">
<input type="text" name="lastname" class="field">
<label>Lastname</label>
</div>
<div class="inputBox">
<input type="email" name="email" class="field">
<label>Email</label>
</div>
<textarea class="man" name="message" ></textarea>
<input type="submit" name="submit">
</form>
</div>






<?php include "footer.php";?>
<script>
$(document).ready(function(){
  /*

let anchors =$(".anchor");

$.each(anchors,function(index,value){
  anchors.animate({"marginLeft":100 + "px",},800,"linear");

});
// return setInterval(function(){
//
//
// },1000)

*/
});
</script>

</body>

</html>
