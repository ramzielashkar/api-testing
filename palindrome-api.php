<?php
$input = $_GET["input"];
$result ="";

// function to test whether a string is palindrome or not,
//returns true if the input is palindrome
function palindrome($input){
  $start = 0;
  $end = strlen($input)-1;
  $ispalindrome = 0;

  while($end > $start){
    if ($input[$start] != $input[$end]){
      $ispalindrome = 1;
      break;
    }
    $start++;
    $end--;
  }

  if($ispalindrome == 0){
    return True;
  }
  else{
    return False;
  }
}

// calling palindrome function
if(palindrome($input)){
  $result = "Palindrome";
}
else{
  $result = "Not Palindrome";
}

// storing results
$results = [
  "input" => $input,
  "result" => $result
];


$results=json_encode($results);
$decoded = json_decode($results, true);

echo $decoded["input"]." is ".$decoded["result"];
 ?>
