<?php


function find_all_pages(){
  global $database;
  $page_query ="select * from pages";
  $result=$database->query($page_query);
  $found=$result->fetch_assoc();
  return $found;
}

function find_page_by_id($id){

  global $database;
  $page_by_id="select  * from pages where page_id='$id'";
  $page=$database->query($page_by_id);
  $pagearray=$page->fetch_assoc();
  return $pagearray;
}



?>
