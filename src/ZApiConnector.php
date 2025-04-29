<?php

namespace Saade\ZApi;

use Saloon\Http\Connector;

class ZApiConnector extends Connector
{
    public function __construct(
        protected string $instanceId,
        protected string $instanceToken,
        protected string $clientToken,
    ) {}

    public function resolveBaseUrl(): string
    {
        return "https://api.z-api.io/instances/{$this->instanceId}/token/{$this->instanceToken}";
    }

    protected function defaultHeaders(): array
    {
        return [
            'Client-Token' => $this->clientToken,
        ];
    }
}
