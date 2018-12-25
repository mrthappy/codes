
<p class="success"style="background:lightgreen;color:white;text-align:center;"></p>
<form class="login_form"  name="loginForm" action="test.php" METHOD="POST" ng-controller="controller">

    <div class="div">
        <i class="far fa-envelope"></i>
        <input type="email" name="email"  id="email" Placeholder="E-mail" class="input">

    </div>

    <div class="div">
        <i class="fas fa-unlock"></i>
        <input type="password" name="password" id="password" placeholder="Password" class="input">

    </div>

    <div class="div">
        <input type="submit" value="LOGIN" class="submitbtn"name="submit">
    </div>
    <span class="register_span">Do You have an account?<a href="login.php?login=register"class="register">Register</a></span>
    <span class="password_reset"><a href="login.php?login=password" class="register">Forgot Password</a></span>


</form>
