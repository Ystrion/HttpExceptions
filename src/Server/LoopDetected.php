<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class LoopDetected extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Loop Detected';
    protected int $httpCode = 508;
}
