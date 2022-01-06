<?php 

namespace Exception;

use Exception;

class ApplicationException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}