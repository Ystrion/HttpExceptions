<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class RequestTimeout extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Request Timeout';
    protected int $httpCode = 408;
}
