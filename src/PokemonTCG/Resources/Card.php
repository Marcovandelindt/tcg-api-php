<?php

namespace PokemonTCG\Resources;

class Card
{
    public string $id;
    public string $name;
    public string $imageUrl;

    public function __construct(array $data)
    {
        $card           = $data['data'] ?? [];
        $this->id       = $card['id'] ?? '';
        $this->name     = $card['name'] ?? '';
        $this->imageUrl = $card['images']['small'] ?? '';
    }
}