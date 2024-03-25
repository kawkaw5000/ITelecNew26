<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $email = $_POST["email"];

    if(!filter_var($email, FILTER))
}