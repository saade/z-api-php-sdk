<?php

namespace Saade\ZApi;

use Saade\ZApi\Exceptions\InstanceNotFoundException;
use Saade\ZApi\Messages\Message;
use Saloon\Http\Response;

class ZApi
{
    public function __construct(
        protected string $instanceId,
        protected string $instanceToken,
        protected string $clientToken,
    ) {}

    public static function instance(string $instance = 'default'): self
    {
        if (! $_instance = config("z-api.instances.{$instance}")) {
            throw InstanceNotFoundException::make($instance);
        }

        return new self(
            instanceId: $_instance['id'],
            instanceToken: $_instance['token'],
            clientToken: $_instance['client_token']
        );
    }

    public function sendMessage(Message $message): Response
    {
        $connector = new ZApiConnector(
            instanceId: $this->instanceId,
            instanceToken: $this->instanceToken,
            clientToken: $this->clientToken
        );

        return $connector->send($message->__toRequest());
    }
}
