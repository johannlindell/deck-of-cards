<?php

namespace JohannLindell\DeckOfCards\Decks\Standard52Card;

use JohannLindell\DeckOfCards\Cards\Card;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Suit;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Value;

class SuitedCard extends Card
{
    public function __construct(
        Value $value,
        private Suit $suit
    ) {
        parent::__construct($value->name);
    }

    public function suit() : Suit
    {
        return $this->suit;
    }


    public function toString() : string
    {
        return $this->suit->name . '::' . $this->value();
    }

    public function toHtml() : string
    {
        return "NOT IMPLEMENTED YET";
    }

    public function compare(Card $other) : bool
    {
        return parent::compare($other)
            && $other->suit() == $this->suit;
    }
}