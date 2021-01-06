<?php
session_start();

$name = "";
$lastname = "";
$telephone = "";
$tablenumber = "";
$numberofpeople = "";
$date = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'stoliki');


if (isset($_POST['reg_user'])) {

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $telephone = mysqli_real_escape_string($db, $_POST['telephone']);
  $tablenumber = mysqli_real_escape_string($db, $_POST['tablenumber']);
  $numberofpeople = mysqli_real_escape_string($db, $_POST['numberofpeople']);
  $date = mysqli_real_escape_string($db, $_POST['date']);

  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($telephone)) { array_push($errors, "Telephone is required"); }
  if (empty($tablenumber)) { array_push($errors, "Table Number is required"); }
  if (empty($numberofpeople)) { array_push($errors, "Number of people is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }


  if (count($errors) == 0) {
  	$password = ($password_1);

  	$query = "INSERT INTO rezerwacja (name, lastname, telephone, tablenumber, numberofpeople, date) 
  	VALUES('$name', '$lastname', '$telephone', '$tablenumber', '$numberofpeople', '$date')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: zarezerwowano.php');
  }
}
