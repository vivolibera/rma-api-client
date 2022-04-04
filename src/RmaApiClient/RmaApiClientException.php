<?php

namespace App\Clients\RmaApiClient;

class RmaApiClientException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct(
            sprintf("RmaApiClient: %s", $message)
        );
    }
}