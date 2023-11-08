<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class MisdirectedRequest extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Misdirected Request';
    protected int $httpCode = 421;
}
