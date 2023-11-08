<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class Forbidden extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Forbidden';
    protected int $httpCode = 403;
}
