<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class RequestHeaderFieldsTooLarge extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Request Header Fields Too Large';
    protected int $httpCode = 431;
}
