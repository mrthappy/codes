

<form class="login_form" name="form" >

  <div class="div">
        <i class="fas fa-user-circle"></i>
      <input type="email" name="firstname"id="email" Placeholder="E-MAIL"   value=<?php echo  $_SESSION["user"]["firstname"] ;?>>

  </div>

  <div class="div">
      <i class="fas fa-user-circle"></i>
      <input type="email" name="lastname"id="email" Placeholder="E-MAIL"   value=<?php echo  $_SESSION["user"]["lastname"] ;?>>

  </div>
    <div class="div">
        <i class="far fa-envelope"></i>
        <input type="email" name="email"id="email" Placeholder="E-MAIL"   value=<?php echo  $_SESSION["user"]["email"] ;?>>

    </div>


    <div class="div">
        <i class="fas fa-unlock"></i>
        <input type="password" name="password" id="password" placeholder="Password" >

    </div>

    <div class="div">
        <input type="submit" value="LOGIN" class="submitbtn">
    </div>
    <span class="register_span">Do You have an account?<a ng-href="#!/register"class="register">Register</a></span>
    <span class="password_reset"><a href="#!/password" class="register">Forgot Password</a></span>


</form>


</script>
</body>
</html>
