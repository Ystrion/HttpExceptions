<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class BadGateway extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Bad Gateway';
    protected int $httpCode = 502;
}
