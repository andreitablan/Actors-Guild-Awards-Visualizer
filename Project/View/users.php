<?php
$user = [
  "username" => "andan",
  "password" => "Andan1_",
];

$pass = $_POST["username"] == $user["username"];
if ($pass) {
  $pass = $_POST["password"] == $user["password"];
}

if ($pass) {
  session_start();
  $_SESSION["user"] = [
    "username" => $user["username"],
    "password" => $user["password"]
  ];
}

echo $pass ? "OK" : "Invalid user or password";
