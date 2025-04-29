<?php

namespace Saade\ZApi\Exceptions;

use RuntimeException;
use Throwable;

class InstanceNotFoundException extends RuntimeException
{
    final public function __construct(string $message = '', int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public static function make(string $id): static
    {
        return new static("Instance with ID '{$id}' was not found. Please check your configuration.");
    }
}
