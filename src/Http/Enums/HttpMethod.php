<?php
declare(strict_types=1);

namespace Clover\Http\Enums;

enum HttpMethod
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATCH = 'PATCH';
    case DELETE = 'DELETE';
    case OPTION = 'OPTION';
    case HEAD = 'HEAD';

}

