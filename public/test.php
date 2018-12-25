<?php

include "../config/connection.php";
if(isset($_POST["submit"])):
  $errors=array();
  $email=$database->cleaner($_POST["email"]);
  $password=$database->cleaner($_POST["password"]);
  // checking for errors on the form
  if(empty($email)|| empty($password)):
    $errors["error"]="the fields are required";
  else:
    $validate="select * from registration where email='$email'";
    $request=$database->query($validate);
    $result=$request->fetch_assoc();
    $passwordHash=$result["password"];
    if(password_verify($password,$passwordHash)):
      header("location:trial.php");
    else:
      $errors["wrong"]="password is wrong";

    endif;
  endif;

endif;
if(!empty($errors)):
  foreach($errors as $key =>$value):
    echo "<h1>";
    echo  strtoupper($value);
    echo "</h1>";
  endforeach;
else:
echo "it is not there";
endif;
 
?>
