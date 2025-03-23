<?php

namespace PokemonTCG;

use PokemonTCG\Http\Request;
use PokemonTCG\Resources\Card;

class Client
{
    protected string $apiKey;
    protected string $apiBaseUrl = 'https://api.pokemontcg.io/v2/';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get a card
     *
     * @param string $id
     *
     * @returns mixed
     */
    public function card(string $id): mixed
    {
        $response = Request::get($this->apiBaseUrl . 'cards/' . $id, $this->apiKey);

        if (!empty($response)) {
            return new Card($response);
        }

        return false;
    }
}