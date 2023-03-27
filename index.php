<?php
/**
 * @author Emre Deniz <https://github.com/EmreDenizz>
*/

// Set the password
$password = "";

// Set password length
$password_length = 8;

// Define errors array
$errors = array();

// Check length
if (strlen($password) < $password_length) {
    $errors[] = "There must be at least $password_length characters!";
}

// Check lowercase letter
if (!preg_match('/[a-z]/', $password)) {
    $errors[] = "There must be at least one lowercase letter!";
}

// Check uppercase letter
if (!preg_match('/[A-Z]/', $password)) {
    $errors[] = "There must be at least one uppercase letter!";
}

// Check numbers
if (!preg_match('/\d/', $password)) {
    $errors[] = "There must be at least one number!";
}

// Check special character
if (!preg_match('/[^a-zA-Z\d]/', $password)) {
    $errors[] = "There must be at least one special character!";
}

// Print the result
if($errors){
    var_dump($errors);
}
else{
    var_dump("Password is STRONG enough.");
}

exit;

?>
