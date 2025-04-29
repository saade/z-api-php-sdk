<?php

namespace Saade\ZApi\Messages;

use Saade\ZApi\ZApiRequest;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class TextMessage extends Message
{
    protected string $message;

    public function message(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function __toRequest(): Request
    {
        $payload = [
            'phone' => $this->phone,
            'message' => $this->message,
        ];

        return new class($payload) extends ZApiRequest
        {
            protected Method $method = Method::POST;

            protected string $endpoint = '/send-text';

            public function __construct(array $payload)
            {
                $this->payload = $payload;
            }
        };
    }
}
