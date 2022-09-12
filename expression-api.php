<?php
// api to calculate a given expression based on a user's inputs
// getting POST request inputs
$a = $_POST["first"];
$b = $_POST["second"];
$c = $_POST["third"];

// calculating the result
$result = pow($a,3) + $b*$c -$a/$b;

// Storing results
$results = [
  "result" => $result,
];
// encoding and decoding JSON object

$results = json_encode($results);
$decoded = json_decode($results, true);
echo "Result is: ".$decoded["result"];
 ?>
