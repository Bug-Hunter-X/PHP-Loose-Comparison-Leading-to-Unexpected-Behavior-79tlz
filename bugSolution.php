```php
function my_function($a, $b) {
  // Always use strict comparison to avoid unexpected behavior
  if ($a === 0) {
    return $b;
  } else {
    return $a + $b;
  }
}

$result = my_function(0, 5);
echo $result; // Outputs 5

$result = my_function(5, 0);
echo $result; // Outputs 5

$result = my_function(0, 0);
echo $result; // Outputs 0

$result = my_function(5, 5);
echo $result; // Outputs 10

//Example of loose comparison that shows the unexpected behavior 
$x = 0;
$y = "0";
if ($x == $y) { // Loose comparison
    echo "Loose comparison considers them equal";
} else {
    echo "Loose comparison considers them different";
}

$x = 0;
$y = "0";
if ($x === $y) { // Strict comparison
    echo "Strict comparison considers them equal";
} else {
    echo "Strict comparison considers them different";
}
```