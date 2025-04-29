<?php

namespace Saade\ZApi\Messages;

abstract class Message
{
    public function __construct(protected string $phone) {}

    public static function to(string $phone): static
    {
        return new static($phone);
    }

    abstract public function __toRequest(): \Saloon\Http\Request;
}
