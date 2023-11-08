<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class Gone extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Gone';
    protected int $httpCode = 410;
}
