```php
$file = fopen("myfile.txt", "r");
if ($file) {
    // Process the file...
    fclose($file);
} else {
    $error = error_get_last();
    $errorMessage = "Error opening file: ";
    if ($error !== null) {
        $errorMessage .= $error['message'];
    } else {
        $errorMessage .= "Unknown error.";
    }
    error_log($errorMessage);
    // Handle the error, log error details
}
```