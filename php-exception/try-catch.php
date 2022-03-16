<?php 

require_once __DIR__ .  "/AuthRequest.php";

$auth = new AuthRequest;
$auth->username = " ";
$auth->password = " ";

// with try-catch for handle your error
try {
    echo AuthRequest::authenticate($auth);
} catch (ValidationException | Exception $exception) {
    echo "Error: $exception" . PHP_EOL;
} 

echo "VALID AUTH" . PHP_EOL;