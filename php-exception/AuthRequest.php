<?php 

require_once __DIR__ . '/exception/ValidationException.php';

class AuthRequest
{
    public ?string $username, $password;

    public static function authenticate(AuthRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException('Username must be filled in.');
        } else if (!isset($request->password)) {
            throw new ValidationException('Password must be filled in.');
        } else if (trim($request->username) == "") {
            throw new Exception('Username cannot be empty.');
        } else if (trim($request->password) == "") {
            throw new Exception('Password cannot be empty.');
        }
    }
}