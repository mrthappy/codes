<?php

function find_page_id($id){
  // run query
  global $database;
  $query= $query="SELECT  * FROM category WHERE  cat_subjectid='$id'";
  $result =$database->query($query);
  return $result;
}
if(isset( $_GET["category"])):
$id=$_GET["category"];
$result=find_page_id($id);
while($rows=$result->fetch_assoc()){
$content='<section class="main_section"> ';
$content.='<div class="section_header_div"> ';
$content.='<h2 class="section_header"> ';
$content.= $rows["cat_text"];
$content.='</h2>';
$content.='</section>';
echo $content;


}




endif;


 ?>
