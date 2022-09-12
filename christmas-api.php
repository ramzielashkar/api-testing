<?php
// getting date entered by GET request
$today = strtotime($_GET['date']);

//getting difference between Christmas date and date entered
$timeleft = strtotime("2022/12/25")-$today;
// Rounding result into days
$daysleft = round((($timeleft/24)/60)/60);

// Storing results
$result = [
  "days"=> $daysleft
];

// encoding and decoding JSON object
$results=json_encode($result);
$decoded = json_decode($results, true);
echo "There is ".$decoded["days"]." days left for Christmas."; ?>
