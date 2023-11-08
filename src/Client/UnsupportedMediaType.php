<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class UnsupportedMediaType extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Unsupported Media Type';
    protected int $httpCode = 415;
}
