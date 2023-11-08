<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class InternalServerError extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Internal Server Error';
    protected int $httpCode = 500;
}
