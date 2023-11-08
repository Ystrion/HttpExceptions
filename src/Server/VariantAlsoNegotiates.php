<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Server;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class VariantAlsoNegotiates extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Variant Also Negotiates';
    protected int $httpCode = 506;
}
