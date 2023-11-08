<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class NotImplemented extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Not Implemented';
    protected int $httpCode = 501;
}
