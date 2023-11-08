<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class ExpectationFailed extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Expectation Failed';
    protected int $httpCode = 417;
}
