<?php
session_start();
$_SESSION["set"]="djdjdj";



 ?>

 <div>
   <a href="mail.php?mail=mail">mail</a>

   <?php
   if(isset($_GET["mail"])):
     include "../config/connection.php";
     $pages="select * from pages";
     $result=$database->query($pages);
     $found=$result->fetch_assoc();
   endif;


    ?>
    <p>
      <?php
      if(isset($found)):
        echo "it has been sset";
      
      endif;


       ?>
 </div>
