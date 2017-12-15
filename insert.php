<?php

pg_connect("dbname=cx user=chelle.tuerk password=poodoo host=localhost") or die("Couldn't Connect".pg_last_error());

$name_value = $_POST['name'];
$email_value = $_POST['email'];

$query = "INSERT INTO users(name, email) VALUES ('$name_value', '$email_value')";
$query = pg_query($query);

if($query)
  echo "inserted successfully!";
else{
  echo "There was an error! ".pg_last_error();
}

?>
