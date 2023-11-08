<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class TooEarly extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Too Early';
    protected int $httpCode = 425;
}
