<?php

namespace webignition\StreamFactoryInterface;

use Psr\Http\Message\StreamInterface;

interface StreamFactoryInterface
{
    public function createFromString(string $content): StreamInterface;
}
