<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class Unauthorized extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Unauthorized';
    protected int $httpCode = 401;
}
