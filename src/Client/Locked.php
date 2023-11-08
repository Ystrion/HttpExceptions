<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class Locked extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Locked';
    protected int $httpCode = 423;
}
