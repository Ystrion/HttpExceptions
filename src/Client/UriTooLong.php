<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class UriTooLong extends AbstractHttpExceptions
{
    protected string $httpMessage = 'URI Too Long';
    protected int $httpCode = 414;
}
