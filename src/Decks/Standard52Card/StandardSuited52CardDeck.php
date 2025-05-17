<?php

namespace JohannLindell\DeckOfCards\Decks\Standard52Card;

use JohannLindell\DeckOfCards\Decks\Standard52Card\SuitedCard;
use JohannLindell\DeckOfCards\Decks\Deck;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Suit;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Value;

class StandardSuited52CardDeck extends Deck
{
    public function __construct() {
        parent::__construct();
        $this->deck = $this->buildDeck();
    }

    protected function buildDeck() : array
    {
        $cards = [];
        
        $buildSuit = function (Suit $suit) : array
        {
            $suitBuild = [];
            foreach(Value::cases() as $value) {
                $suitBuild[] = new SuitedCard($value, $suit);
            }
            return $suitBuild;
        };

        foreach(Suit::cases() as $suit) {
            $cards = array_merge($cards, $buildSuit($suit));
        }

        return $cards;
    }
}