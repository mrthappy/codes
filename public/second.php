<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$email = $request->firstname;
@$pass = $request->lastname;
echo json_encode($email); 


?>