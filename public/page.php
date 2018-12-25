<?php while($rows=$result->fetch_assoc()){?>
  <div class="holders" >
    <a  class="story_container" href="mainuser.php?mainuser=page1&category=<?php echo savehtml($rows["page_id"]);?>">
    <div class="text_holder">
    <p class="headlines"><?php echo $rows["text"];?></p>
    <p class="author">BY:<?php echo $rows["author"];?></p>
  </div>
    <div class="image_container">
<img src="<?php echo $rows["page_image"];?>">
</div>
</a>
</div>
<?php } ?>
