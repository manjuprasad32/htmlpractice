<?php

require "conn.php";

$id= $_POST['id'];
$name=$_POST['name'];

// please create the table inside one database with 2 fields id and name 
$sql = "INSERT INTO test (id, name)VALUES ('$id', '$name')";

$data =mysqli_query($conn, $sql);
if ($data) {
  	 echo "Registration Sucessfull - will be redirected within 5 sec Thank You<br>";

       header('refresh:5;url=index.html');
         
} else {
  echo "Error:";
}
mysqli_close($conn);

?>


