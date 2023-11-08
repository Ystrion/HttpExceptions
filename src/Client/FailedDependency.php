<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class FailedDependency extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Failed Dependency';
    protected int $httpCode = 424;
}
