<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class UnavailableForLegalReasons extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Unavailable For Legal Reasons';
    protected int $httpCode = 451;
}
