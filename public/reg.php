<?php


 ?>
<!doctype html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../stylesheet/loginstyle.css">
</head>
<body>
<form  id="register"  action="#" METHOD="POST">

  <div class="div">
    <i class="fas fa-user-circle"></i>

    <input type="text" name="firstname"  id="email" Placeholder="Firstname" class=" input">
  </div>
  <div class="div">
      <i class="fas fa-user-circle"></i>
      <input type="text" name="lastname"   Placeholder="Lastname" class=" input">

  </div>

    <div class="div">
        <i class="far fa-envelope"></i>
        <input type="email" name="email"   Placeholder="E-mail" class=" input">

    </div>
    <div class="div">
        <i class="far fa-envelope"></i>
        <input type="password" name="password"   Placeholder="E-mail" class=" input">

    </div>



  <div class="div">
      <input type="submit" value="REGISTER" class="submitbtn"name="Register">
  </div>
</form>
<span class="register_span"><a href="login.php?login=login" class="register">Already Memeber</a></span>
<!-- <script>
$(document).ready(function(){
let $form=$("form");


$(document).ready(function(){
let form =$("form");
let formdata=form.serialize();
form.submit(function(event){
  event.preventDefault();
  $.ajax({
    url:"test.php",
    data:formdata,
    method:"POST",
    dataType:"json"
  }).done(function (data){
    let response=data;
    console.log(response);
  });
});

});

function resetErrors(){

  $('p.inputErrors').remove();


}


});



</script> -->
</body>
</html>
