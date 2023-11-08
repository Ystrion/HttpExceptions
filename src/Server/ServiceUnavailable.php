<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class ServiceUnavailable extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Service Unavailable';
    protected int $httpCode = 503;
}
