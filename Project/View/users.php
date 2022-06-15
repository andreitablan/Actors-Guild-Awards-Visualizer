<?php
$user = [
  "username" => "andan",
  "password" => "Andan1_",
];

// (B) CHECK USER & PASSWORD
$pass = $_POST["username"] == $user["username"];
if ($pass) { $pass = $_POST["password"] == $user["password"]; }
 
// (C) START SESSION IF VALID USER
if ($pass) {
  session_start();
  $_SESSION["user"] = [
    "username" => $user["username"],
    "password" => $user["password"]
  ];
}
 
// (D) RESPOND TO AJAX
echo $pass ? "OK" : "Invalid user or password";
 
/* (E) PROTECT ALL YOUR PAGES
* session_start();
* if (!is_array(user)) { header("location: http://site.com/login.html"); }
*/
 
/* (F) TO LOGOFF
 * unset($_SESSION["user"]);
 */