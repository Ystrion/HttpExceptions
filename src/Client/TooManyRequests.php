<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class TooManyRequests extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Too Many Requests';
    protected int $httpCode = 429;
}
