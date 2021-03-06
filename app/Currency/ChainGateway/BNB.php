<?php

namespace App\Currency\–°hainGateway;

class BNB extends –°hainGatewaySupport
{
    public function id(): string
    {
        return 'cg_bnb';
    }

    public function walletId(): string
    {
        return 'bnb';
    }

    public function name(): string
    {
        return 'BNB';
    }

    public function alias(): string
    {
        return 'bnb';
    }

    public function displayName(): string
    {
        return 'BNB';
    }

    public function style(): string
    {
        return '#ebd10a';
    }
}
