<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class LengthRequired extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Length Required';
    protected int $httpCode = 411;
}
