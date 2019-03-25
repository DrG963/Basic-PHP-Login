<?php

$user = 'root';
$pass = '';
$db = 'table';

$estDb = mysqli_connect('localhost', $user, $pass, $db) or die("Database connection FAILED. ");

if(!$estDb){
  echo "<p style='text-align:center;'>Sorry mate, something went wrong. I guess I suck at PHP... </p>";
}
else{
  echo "<p style='text-align:center;'>Connection Success... </p>";
}

if(!mysqli_select_db($estDb, 'table')){
  echo "You didn't connect to the right part. <span style='color:red;>Don't blame yourself</span>. It's my fault. ";
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM info WHERE username='$username'";

if($username != '' and $password != ''){
echo "<br><p style='text-align:center;'>You entered a username and password.</p><br>";
}
else{
  echo "<br>FAIL, you didn't enter stuff.";
}
mysqli_query($estDb, $sql);

$results =$estDb->query($sql);

if($results->num_rows > 0){
  //Output Data
  while($row = $results->fetch_assoc()){
    $getName= $row['Name'];
    $getUsername= $row['Username'];
    $getPassword= $row['Password'];
    if($password != $getPassword){
      echo "<p style='text-align:center;color:red;'>Wtf Bro your shit in not right... Go back <a href='index.php'>Home</a> and try to enter the right password..<p>";
    }
    else{
      echo "<p style='text-align:center;'> Your name is: " . $getName . "</p><br>";
      echo "<p style='text-align:center;'> Your username is: " . $getUsername . "</p><br>";
      echo "<p style='text-align:center;'> Your password is: " . $getPassword . "</p><br>";
    }
  }
}
else{
  echo "<br>That username is not in our database...";
}

echo"<p style='text-align:center;color:green;'>You got here! Here is a link to <a href='index.php'>HOME</a>.</p>";

 ?>
