<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class RangeNotSatisfiable extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Range Not Satisfiable';
    protected int $httpCode = 416;
}
