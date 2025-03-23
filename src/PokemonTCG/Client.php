<?php

namespace PokemonTCG;

use PokemonTCG\Http\Request;
use PokemonTCG\Http\Response;

class Client
{
    protected string $apiKey;
    protected string $apiBaseUrl = 'https://api.pokemontcg.io/v2/';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }
}