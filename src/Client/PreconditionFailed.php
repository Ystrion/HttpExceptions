<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class PreconditionFailed extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Precondition Failed';
    protected int $httpCode = 412;
}
