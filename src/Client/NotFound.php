<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class NotFound extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Not Found';
    protected int $httpCode = 404;
}
