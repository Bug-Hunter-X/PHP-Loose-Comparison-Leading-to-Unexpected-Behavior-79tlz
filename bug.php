```php
function my_function($a, $b) {
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
```