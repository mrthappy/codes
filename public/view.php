<?php
include "../config/connection.php";
if(isset($_GET["pages"])):
  $pages=$_GET["pages"];

endif;
$pages ="select * from pages where page_id='$pages'";
$fetch=$database->query($pages);
$result=$fetch->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en" >
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magazine</title>
        <link rel="stylesheet" href="../stylesheet/loginstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../javascript/magazine.js"></script>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');

img{max-width:100%;display:block;}
body{
  font-family:"roboto",sans-serif;
}
.section_header_div{

  text-align:center;
  margin-bottom:1em;
}
.header_footnote{
  margin-top:.4em;
}
.section_header{
  font-size:2.3em;

}
.footnote_span{
  color:#95a5a6;
}
.image_footnote{
    font-size:0.6rem;
    color:#95a5a6;
    padding-top:10px;
}
.main_cover{border-bottom:.3px solid #95a5a6;margin-bottom:20px;}
.image_cover{
 padding:0 10px;
  margin-bottom:1.7em;
  position:relative;
}
.image_cover:before{
  display:table;
  position:absolute;
  content:"";
  width:0px;
  height:0px;
  border-bottom:10px solid #fff;
  border-right:10px solid transparent;
  border-left:10px solid transparent;
  border-top:10px solid transparent;
  left:50%;
  top:73%;

}

.writing_cover{padding:10px ;}
.writing_text{
  font-size:.98rem;
  text-align:justify;
  line-height:1.5rem;
}
.comments{

  padding:10px 10px;
}
.comments_box{
  background:black;
  color:#fff;
  padding:10px 10px;
  outline:none;
  display:block;
  border:none;
  margin:0 auto;
  width:100%;

  border:1px solid #fff;
  cursor:pointer;
}
.comment_div{
opacity:0;

}
.seen{
  opacity:1;
}
.user_avatar{
  display:flex;
  justify-content:space-between;
  margin-top:20px;
  max-width:100%;
}
.avatar_wrapper{
  width:35px;
  height:35px;

}
.user_comment_panel{
  margin-bottom:20px;
}
.comment_textarea{
background:coral;
}
.comment_number_parent{
  color:black;
  display:flex;
  justify-content:center;
  max-width:100%;


}
.comment_number{
  font-weight:bolder;
  margin-left:10px;
  margin-top:10px;

}
.comment_box{
  max-width:100%;
  margin-top:20px;


}
#comment_container{
  display:block;
  outline:none;
  border:none;
  min-width:100%;
  min-height:50px;
  padding:8px 8px;
  border-radius:2px;

}
#comment_footer_box{
  background:#e6f3e9;
  padding:10px;
  text-align:right;
}
#postBtn{
  display:block;
  background-color: #9cb4d8;
  border-color:#9cb4d8;
  color:white;
  border:none;
  font-size:.87rem;
  border-radius:2px;
  padding:10px 10px;
  float:right;
  font-weight:bold;
}
#comments_users{
  margin-bottom:1rem;


}
#comment_user_picture{
float:left;
width:45px;
height:45px;
border-radius:50%;
margin-right:1.8em;
margin-bottom:0.5em;
shape-outside:ellipse(50%,50%);

}

</style>


</head>
<body>
  <div id ="cover">
  <header class="logo_header">
    <div class="logo_image"> </div>
  </header><!-- end of the logo Area -->
</div>

<article>
<section class="main_section">
  <div class="section_header_div">
  <h2 class="section_header">Inside the lobbying that caught up with this folks</h2>
  <p class="header_footnote"><span class="footnote_span">By <?php echo $result["author"];?></span> </p>

</div>
</section>
<section class="main_cover">
  <div class="image_cover">
    <img src="<?php echo $result["page_image"];?>">
    <p class="image_footnote">Former Trump chaairman is prictuiii
Checking the network cables, modem, and router
Reconnecting to Wi-Fi</p>
</div>
</section>
<section class="writing_cover">
  <p class="writing_text"><?php echo $result["text"];?></p>
</section>

</article>

<section class="comments">
  <button class="comments_box">Show Comments</button>
  <div class="comment_div">
    <div class="comment_number_parent">
    <p class="comment_number">9 Comments</p>

  </div>


  </div>


</section>
<div id ="comments_users">
  <form class="comment_box"method="post" action="#">
    <input type="text" id="comment_container"name="inputText">
    <input type="submit" id="postBtn" value="post"></input>
  </form>
  <div id="commentDiv">
    <img src="../images/beauty.jpg"  id="comment_user_picture">
  <p id="user_text">Donald Trump, aovement. Donald Trump, aovement. Earlier this year, the board of directors of Wellstone Action an influential training group fEarlier this year, the board of directors of Wellstone Action an influential training group fo</p>
</div>
</div>

<?php include "footer.php";?>

</body>
</html>
