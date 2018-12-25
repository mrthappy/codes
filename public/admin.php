
<! doctype html>
<title>Admin</title>
<head>
</head>
<body>
  <h1>ADMIN</h1>

  <a href="admin.php?pages">pages</a>

    <?php
    if(isset($_GET["pages"])):
      include  "../config/connection.php";
      $pages="select * from registration";
      $result=$database->query($pages);








while($row=$result->fetch_assoc()){
  echo "<table>";
  echo "<tr>";
  echo "<th>";
  echo "UseId";
  echo "</th>";
  echo "<th>";
  echo "Firstname";
  echo "</th>";
  echo "<th>";
  echo "Lastname";
  echo "</th>";
  echo "<th>";
  echo "Email";
  echo "</th>";
  echo "<th>";
  echo "Image";
  echo "</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo $row["user_id"];
  echo "</td>";
  echo "<td>";

  echo $row["firstname"];
  echo "</td>";
  echo "<td>";
  echo $row["lastname"];
  echo "</td>";
  echo "<td>";
  echo $row["email"];
  echo "</td>";
  echo "<td>";
  echo '<a href="update.php?userid='.$row["user_id"].'">view</a>';
  echo "</td>";
  echo "<td>";
  echo '<a href="update.php?userid='.$row["user_id"].'">delete</a>';
  echo "</td>";
  echo "</td>";
  echo "<td>";
  echo '<a href="update.php?userid='.$row["user_id"].'">update</a>';
  echo "</td>";
  echo "</tr>";
  echo "</table>" ;


}

else:
  echo "please request for pages";
endif;


?>


</body>


</html>
