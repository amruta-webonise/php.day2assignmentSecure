<?php
   $user=$_POST['username'];
  $pass=$_POST['password'];

  $host = 'localhost';
  $username = 'root';
  $password = 'root';

  echo "entered user name= $user and password=$pass<br/>";

try {
    $PdoObject = new PDO("mysql:host=$hostname;dbname=test", $username, $password);
 	echo "Connected to Mysql<br/>";
    $PdoObject->exec("INSERT INTO user VALUES ('$user', '$pass')");
    $result=$PdoObject->query("SELECT * from user where username ='$user'");
    foreach($result as $row)
           {
             echo 'password for user is ';
             print $row['username'] . '-'.$row['password'].'<br />';
           }

$PdoObject = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
