<?php

namespace JohannLindell\DeckOfCards\Decks;

use JohannLindell\DeckOfCards\Cards\Card;

abstract class Deck
{
    protected array $deck = [];

    public function __construct() {}

    /**
     * Returns all the cards reamining in the deck
     */
    public function cards() : array
    {
        return $this->deck;
    }

    /**
     * Peeks at the top card in the deck
     */
    public function peek() : Card
    {
        return reset($this->deck);
    }

    /**
     * Peeks at the top card in the deck
     */
    public function end() : Card
    {
        return end($this->deck);
    }

    /**
     * Shuffles the cards 10 times if nothing else is specified.
     */
    public function shuffle(int $times = 10) : void
    {
        for($i = 0; $i < $times; ++$i) {
            shuffle($this->deck);
        }
    }

    /**
     * Cuts the deck randomly and puts bottom part on top.
     */
    public function cut() : void
    {
        $splicePoint = random_int(1, count($this->deck) - 2);
        $this->deck = array_merge(
            array_slice($this->deck, $splicePoint),
            array_slice($this->deck, 0, $splicePoint)
        );
    }

    /**
     * Removes and returns a card from the deck.
     */
    public function removeCard() : Card
    {
        return array_shift($this->deck);
    }

    /**
     * Removes a number of cards
     */
    public function removeCards(int $numberOfCards) : array
    {
        return array_splice($this->deck, 0, $numberOfCards);
    }

    /**
     * Builds the deck when initializing the deck.
     */
    abstract protected function buildDeck() : array;
}