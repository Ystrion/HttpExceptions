<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class NotAcceptable extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Not Acceptable';
    protected int $httpCode = 406;
}
