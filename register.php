<?php
require('connect.php');

$postdata = file_get_contents('php://input');

if (isset($postdata) && !empty($postdata)) {

    $request = json_decode($postdata);

    print_r($request);
    // Variables
    $username = $request->username;
    $email = $request->email;
    $pass = $request->pass;

    // Register into the eteyeloDB
    $sql = "INSERT INTO `users`(username, email, pass) VALUES('$username', '$email', '$pass')";
    // Execute the sql query
    if (mysqli_query($con, $sql)) {
        http_response_code(201);
    } else {
        http_response_code(422);
    }
}