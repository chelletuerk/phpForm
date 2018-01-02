<?php

pg_connect("dbname=cx user=chelle.tuerk password=database host=localhost") or die("Couldn't Connect".pg_last_error());

$name_value = $_POST['name'];
$email_value = $_POST['email'];
$survey_name = $_POST['survey-name'];
$survey_description = $_POST['survey-description'];

$user_query = "INSERT INTO users(name, email) VALUES ('$name_value', '$email_value') RETURNING user_id";
$user_query_result = pg_query($user_query);

$survey_query = "INSERT INTO survey(name, description) VALUES ('$survey_name', '$survey_description')";
$survey_query_result = pg_query($survey_query);

if($user_query_result && $survey_query_result)
  echo "inserted successfully!";
else{
  echo "There was an error! ".pg_last_error();
}
?>
