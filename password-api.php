<?php
// api to check if a password is strong or not
$password = $_POST["pass"];

// function that returns true if password is strong, false otherwise
function isStrong($password)
{
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
return False;
}
else{
return True;
}
}

// checking password
if(isStrong($password)){
$state = "Strong";
}
else {
  $state = "Weak";
}

// Storing results

$results=[
  "result" => $state
];
// encoding and decoding JSON object
$results = json_encode($results);
$decoded = json_decode($results, true);

echo "Your Password is ".$decoded["result"].".";
 ?>
