<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class HttpVersionNotSupported extends AbstractHttpExceptions
{
    protected string $httpMessage = 'HTTP Version Not Supported';
    protected int $httpCode = 505;
}
