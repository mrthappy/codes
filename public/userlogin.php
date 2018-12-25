<head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>ostudio</title>
	     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

       <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
       <style>
          *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            background: #dfe6e9;
          }
          .logo_header {
              background: #0984e3;
              height: 50px;
              display: block;
              width: 100% ;
              padding-top: 10px;
              padding-left: 10px;
          }

          .logo_image {
              background-image: url("../images/logo.png");
              background-repeat: no-repeat;
              background-size: cover;
              background-position: center center;
              width: 30px;
              height: 30px;
          }
          .page_holder{
            margin-top:20px;
            min-height:100vh;
            margin-bottom:20px;
            padding:0 20px;
          }
.email,.password{
  display: block;
  outline: none;
  width: 100%;
  padding: 20px;
  border: 1px solid #d3d3d3;
  border-radius: 50px;
  margin-bottom: 2em;
  padding-left: 60px;
  transition: all .5s ease-in;
}

.submitbtn {
    display: block;
    background: #0aafbe;
    padding: 20px;
    border-radius: 30px;
    color: white;
    border: 1px solid #d3d3d3;
    ;
    width: 100%;
    padding: 20px;
}
       </style>
</head>
<body>
  <div id ="cover">
  <header class="logo_header">
    <div class="logo_image"> </div>
  </header><!-- end of the logo Area -->
</div>
  <div class="view">
<div ng-view class="page_holder">
  <form class="login_form" name="form"  method="POST" action="test.php">

      <div class="div">
          <i class="far fa-envelope"></i>
          <input type="email" name="email"id="email" Placeholder="E-MAIL" class="email" >

      </div>

      <div class="div">
          <i class="fas fa-unlock"></i>
          <input type="password" name="password" id="password" placeholder="Password" class="password">

      </div>

      <div class="div">
          <input type="submit" value="LOGIN" class="submitbtn">
      </div>
      <span class="register_span">Do You have an account?<a ng-href="#!/register"class="register">Register</a></span>
      <span class="password_reset"><a href="#!/password" class="register">Forgot Password</a></span>


  </form>

</div>
</div>
<script>

function FormProcess(Formdata){
  return {
    $.ajax({
      url:"test.php",
      data:document.querySelector("form").value
    })
  }
}
</script>
</body>
</html>
