<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class UnprocessableEntity extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Unprocessable Entity';
    protected int $httpCode = 422;
}
