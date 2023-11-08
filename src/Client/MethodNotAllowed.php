<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class MethodNotAllowed extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Method Not Allowed';
    protected int $httpCode = 405;
}
