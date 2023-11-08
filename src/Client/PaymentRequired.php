<?php

declare(strict_types=1);

namespace Ystrion\HttpExceptions\Client;

use Ystrion\HttpExceptions\AbstractHttpExceptions;

class PaymentRequired extends AbstractHttpExceptions
{
    protected string $httpMessage = 'Payment Required';
    protected int $httpCode = 402;
}
