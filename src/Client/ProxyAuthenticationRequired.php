<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class ProxyAuthenticationRequired extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Proxy Authentication Required';
    protected int $httpCode = 407;
}
