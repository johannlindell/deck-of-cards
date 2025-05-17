<?php

namespace JohannLindell\DeckOfCards\Cards;

class Card
{
    public function __construct(
        protected string $value
    ) {}

    public function value() : string
    {
        return $this->value;
    }

    public function toString() : string
    {
        return $this->value();
    }

    public function compare(Card $other) : bool
    {
        return $other->value == $this->value;
    }
}