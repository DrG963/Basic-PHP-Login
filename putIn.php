<?php

$user = 'root';
$pass = '';
$db = 'table';

$estDb = mysqli_connect('localhost', $user, $pass, $db) or die("Database connection FAILED. ");

if(!$estDb){
  echo 'Sorry mate, something went wrong. I guess I suck at PHP... ';
}
else{
  echo "You have connected to the DB Server. ";
}

if(!mysqli_select_db($estDb, 'table')){
  echo "You didn't connect to the right part. <span style='color:red;>Don't blame yourself</span>. It's my fault. ";
}
else{
  echo "Also, you connected to the right part! ";
}

#helps protect against sql injection
$name = mysqli_real_escape_string($estDb, $_POST['name']);
$username = mysqli_real_escape_string($estDb, $_POST['username']);
$password = mysqli_real_escape_string($estDb, $_POST['password']);

echo "<br><br>Name is -> " . $name . " || and Username is -> " . $username . " || and Password is -> " . $password;

$sql = "INSERT INTO info (Name, Username, Password) VALUES ('$name', '$username', '$password')";

if($name != "" and $username != "" and $password != ""){
echo "<br>success!!!";
}
else{
  echo "<br>FAIL";
}
mysqli_query($estDb, $sql);


echo"<p style='text-align:center;color:green;'>You got here!</p> Now go back <a href='index.php'>HOME</a> and try to use the login.'";

 ?>
