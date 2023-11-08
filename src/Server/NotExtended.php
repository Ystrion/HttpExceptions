<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class NotExtended extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Not Extended';
    protected int $httpCode = 510;
}
