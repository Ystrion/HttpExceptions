<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class NetworkAuthenticationRequired extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Network Authentication Required';
    protected int $httpCode = 511;
}
