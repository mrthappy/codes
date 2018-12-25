<head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>ostudio</title>
	     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <link rel="stylesheet" href="../stylesheet/loginstyle.css">
       <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div id ="cover">
  <header class="logo_header">
    <div class="logo_image"> </div>
  </header><!-- end of the logo Area -->
</div>
  <div class="view">
<div ng-view class="page_holder">
  <?php
include "form.php";
  ?>


</div>
</div>

<script>


</script>
</body>
</html>
