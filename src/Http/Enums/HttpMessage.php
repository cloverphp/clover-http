<?php

declare(strict_types=1);

namespace Clover\Http\Enums;

enum HttpMessage
{
    case int 200 = 'Success';
    case int 404 = 'Not found';
    case int 502 = 'Server Busy';
}
