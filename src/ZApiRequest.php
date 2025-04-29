<?php

namespace Saade\ZApi;

use Saloon\Contracts\Body\HasBody;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Plugins\AcceptsJson;

class ZApiRequest extends Request implements HasBody
{
    use AcceptsJson;
    use HasJsonBody;

    protected string $endpoint;

    protected array $payload;

    public function resolveEndpoint(): string
    {
        return $this->endpoint;
    }

    protected function defaultBody(): array
    {
        return $this->payload;
    }
}
