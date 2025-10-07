<?php

declare(strict_types=1);

namespace Clover\Http;

use Clover\Http\Interfaces\RequestInterface;
use Clover\Http\Interfaces\ResponseInterface;

final class Http implements RequestInterface, ResponseInterface
{
    public function __construct(
        public readonly ?string $url=null,
        public readonly array $body = []
    )
    {
    }


}
