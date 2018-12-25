
<?php
$userid=$_SESSION["user"]["user_id"];
include "../config/connection.php";
if(isset($_POST["submit"])):
  $email;
  $lastname;
  $firstname;
  $filename;
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $filename=$_FILES["image"]["name"];
  $filerror=$_FILES["image"]["error"];
  $tmpfile=$_FILES["image"]["tmp_name"];
  if($filename):
    $fileext=explode(".",$filename);
    $ext =strtolower(end($fileext));
    // checking for the types of image files sent
    $allowedext=array("jpg","png","jpeg");
    if(in_array($ext,$allowedext)):
    // prepare to load the image and update to the database
    if($filerror==0){
      $userpic=time()."_".mt_rand(10,1000).".".$ext;
        $des="../upload/";
        if(move_uploaded_file($tmpfile,$des.$userpic)){
            $update ="update registration set firstname='$firstname',lastname='$lastname',email='$email',user_img='$userpic'where user_id='$userid'";
              $query=$database->query($update);
              $result=$database->query($update);

                  if($result):
                  $user="select * from registration where user_id='$userid'";
                   $q=$database->query($user);
                   $a=$q->fetch_assoc();
                   $_SESSION["user"]["firstname"]=$a["firstname"];
                    header("location:http://localhost/project/public/trial.php?request=editprofile");
                  endif;


        }else{
          echo "Jj";
        }
    }






  endif;
else:

  $update ="update registration set firstname='$firstname',lastname='$lastname',email='$email',where user_id='$userid'";
    $query=$database->query($update);
    $result=$database->query($update);

        if($result):
        $user="select * from registration where user_id='$userid'";
         $q=$database->query($user);
         $a=$q->fetch_assoc();
         $_SESSION["user"]["firstname"]=$a["firstname"];
          header("location:http://localhost/project/public/trial.php?request=editprofile");
        endif;



endif;

endif;

// if(isset($_POST["submit"])):
//   $email;
//   $lastname;
//   $firstname;
//   $filename;
//   $firstname=$_POST["firstname"];
//   $lastname=$_POST["lastname"];
//   $email=$_POST["email"];
//   $filename=$_FILES["image"];
//
//
//   $update="update registration set email='$email',firstname='$firstname',lastname='$lastname' where user_id=$userid";
//
//   $result=$database->query($update);
//   if($result):
//     $user="select * from registration where user_id=$userid";
//     $q=$database->query($user);
//     $a=$q->fetch_assoc();
//     $_SESSION["user"]["firstname"]=$a["firstname"];
//     header("location:http://localhost/project/public/trial.php?request=editprofile");
//   endif;
// endif;
//
//
//  ?>
  <?php
 $user="select * from registration where user_id=$userid";
 $report=$database->query($user);




 ?>

<p class="success"style="background:lightgreen;color:white;text-align:center;"></p>
<?php
while($row=$report->fetch_assoc()){
?>
<img src="../upload/<?php echo $row["user_img"];?>">
<form class="login_form"  name="loginForm" action="#" METHOD="POST" ng-controller="controller"enctype="multipart/form-data">

  <div class="div">
      <i class="far fa-envelope"></i>
      <input type="firstname" name="firstname"  id="email" Placeholder="E-mail" class="input"value="<?php echo $row["firstname"];?>">

  </div>
  <div class="div">
      <i class="far fa-envelope"></i>
      <input type="file" name="image"  id="email" Placeholder="E-mail" class="input">

  </div>
  <div class="div">
      <i class="far fa-envelope"></i>
      <input type="text" name="lastname"  id="email" Placeholder="E-mail" class="input"value="<?php echo $row["lastname"];?>">

  </div>

    <div class="div">
        <i class="far fa-envelope"></i>
        <input type="email" name="email"  id="email" Placeholder="E-mail" class="input"value="<?php echo $row["email"];?>">

    </div>


    <div class="div">
        <input type="submit" value="LOGIN" class="submitbtn"name="submit">
    </div>
    <span class="register_span">Do You have an account?<a href="login.php?login=register"class="register">Register</a></span>
    <span class="password_reset"><a href="login.php?login=password" class="register">Forgot Password</a></span>


</form>
<?php
}
?>
