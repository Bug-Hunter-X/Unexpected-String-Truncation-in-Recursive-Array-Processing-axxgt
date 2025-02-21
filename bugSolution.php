```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strlen($value) > 10) {
        //Check if the key is not items, then truncate 
      if($key !== 'items'){
        $data[$key] = substr($value, 0, 10);
      }
    }
  }
  return $data;
}

$data = [
  'name' => 'John Doe',
  'address' => '123 Main St, Anytown, CA 91234',
  'items' => ['apple', 'banana', 'orange', 'grapefruit']
];

$processedData = processData($data);
print_r($processedData);
```