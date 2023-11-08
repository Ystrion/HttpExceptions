<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class GatewayTimeout extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Gateway Timeout';
    protected int $httpCode = 504;
}
