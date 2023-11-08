<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions;

use Exception;

class AbstractHttpExceptions extends Exception
{
    protected string $httpMessage = '';
    protected int $httpCode = 0;

    public function __construct(?string $message = null, ?Exception $previous = null)
    {
        parent::__construct($message ?? $this->httpMessage, $this->httpCode, $previous);
    }
}
