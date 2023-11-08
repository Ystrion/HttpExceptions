<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class InsufficientStorage extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Insufficient Storage';
    protected int $httpCode = 507;
}
