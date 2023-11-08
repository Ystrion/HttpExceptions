<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class UpgradeRequired extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Upgrade Required';
    protected int $httpCode = 426;
}
