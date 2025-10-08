<?php

declare(strict_types=1);

namespace Clover\Http\Interfaces;

interface RequestInterface
{
    public function setHeaders(array $headers = [
        'Content-Type' => 'application/json'
    ]): array;

    public function setMethod(string $method = 'GET'): string;

    public function setPath(?string $path = null): string;

    public function setBody(array $data = []): array;

    public function setAuthToken(array $token = [
        "Authorization: Bearer"
    ]): array;
}
