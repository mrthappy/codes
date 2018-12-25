<div class="article_cover">
  <?php
  include "../config/connection.php";
  $category="select * from category";
  $result=$database->query($category);

   ?>
   <?php  while($rows=$result->fetch_assoc()){?>

    <a href="view.php?pages=<?php echo $rows["cat_subjectid"];?>" class="article_holder">
  <div class="article_heading">
    <h1 class="heading_text"><?php echo $rows["cat_heading"];?></h1>
  </div>
  <div class="article_image">
    <img src="<?php echo $rows["cat_image"];?>">
  </div>
  <div class="span_parent">
    <span class="author_name">
      <p><?php echo $rows["cat_author"]. " /". $rows["cat_date"];?></p>

    </span>
  </div>
</a>
<?php
}
?>



</div>
