<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class PreconditionRequired extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Precondition Required';
    protected int $httpCode = 428;
}
