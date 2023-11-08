<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class PayloadTooLarge extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Payload Too Large';
    protected int $httpCode = 413;
}
