<?php

namespace PokemonTCG\Http;

use GuzzleHttp\Client as GuzzleClient;

class Request
{
    /**
     * Send a get request
     *
     * @param string $url
     * @param string $apiKey
     *
     * @returns mixed
     */
    public static function get(string $url, string $apiKey)
    {
        $guzzleClient = new GuzzleClient();

        $response = $guzzleClient->get($url, [
            'headers' => [
                'X-API-Key' => $apiKey,
                'Accept' => 'application/json',
            ]
        ]);

        if (!empty($response->getBody())) {
            return json_decode($response->getBody()
                ->getContents(), true);
        }

        return false;
    }
}