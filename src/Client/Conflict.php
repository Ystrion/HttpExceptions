<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class Conflict extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Conflict';
    protected int $httpCode = 409;
}
