<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class BadRequest extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Bad Request';
    protected int $httpCode = 400;
}
