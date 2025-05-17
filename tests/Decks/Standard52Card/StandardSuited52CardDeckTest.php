<?php

use JohannLindell\DeckOfCards\Decks\Standard52Card\StandardSuited52CardDeck;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Suit;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Value;
use PHPUnit\Framework\TestCase;

class StandardSuited52CardDeckTest extends TestCase
{
    public function testConstructor()
    {
        $deck = new StandardSuited52CardDeck();
        $unshuffledDeckSuitValue = $this->unshuffledDeckSuitValue();
        foreach($deck->cards() as $key => $card) {
            $this->assertEquals($unshuffledDeckSuitValue[$key]['suit'], $card->suit());
            $this->assertEquals($unshuffledDeckSuitValue[$key]['value']->name, $card->value());
        }
    }

    private function unshuffledDeckSuitValue() : array
    {
        return [
            //Hearts
            ['suit' => Suit::Hearts, 'value' => Value::Ace],
            ['suit' => Suit::Hearts, 'value' => Value::Two],
            ['suit' => Suit::Hearts, 'value' => Value::Three],
            ['suit' => Suit::Hearts, 'value' => Value::Four],
            ['suit' => Suit::Hearts, 'value' => Value::Five],
            ['suit' => Suit::Hearts, 'value' => Value::Six],
            ['suit' => Suit::Hearts, 'value' => Value::Seven],
            ['suit' => Suit::Hearts, 'value' => Value::Eight],
            ['suit' => Suit::Hearts, 'value' => Value::Nine],
            ['suit' => Suit::Hearts, 'value' => Value::Ten],
            ['suit' => Suit::Hearts, 'value' => Value::Knight],
            ['suit' => Suit::Hearts, 'value' => Value::Queen],
            ['suit' => Suit::Hearts, 'value' => Value::King],
            //Diamonds
            ['suit' => Suit::Diamonds, 'value' => Value::Ace],
            ['suit' => Suit::Diamonds, 'value' => Value::Two],
            ['suit' => Suit::Diamonds, 'value' => Value::Three],
            ['suit' => Suit::Diamonds, 'value' => Value::Four],
            ['suit' => Suit::Diamonds, 'value' => Value::Five],
            ['suit' => Suit::Diamonds, 'value' => Value::Six],
            ['suit' => Suit::Diamonds, 'value' => Value::Seven],
            ['suit' => Suit::Diamonds, 'value' => Value::Eight],
            ['suit' => Suit::Diamonds, 'value' => Value::Nine],
            ['suit' => Suit::Diamonds, 'value' => Value::Ten],
            ['suit' => Suit::Diamonds, 'value' => Value::Knight],
            ['suit' => Suit::Diamonds, 'value' => Value::Queen],
            ['suit' => Suit::Diamonds, 'value' => Value::King],
            //Clubs
            ['suit' => Suit::Clubs, 'value' => Value::Ace],
            ['suit' => Suit::Clubs, 'value' => Value::Two],
            ['suit' => Suit::Clubs, 'value' => Value::Three],
            ['suit' => Suit::Clubs, 'value' => Value::Four],
            ['suit' => Suit::Clubs, 'value' => Value::Five],
            ['suit' => Suit::Clubs, 'value' => Value::Six],
            ['suit' => Suit::Clubs, 'value' => Value::Seven],
            ['suit' => Suit::Clubs, 'value' => Value::Eight],
            ['suit' => Suit::Clubs, 'value' => Value::Nine],
            ['suit' => Suit::Clubs, 'value' => Value::Ten],
            ['suit' => Suit::Clubs, 'value' => Value::Knight],
            ['suit' => Suit::Clubs, 'value' => Value::Queen],
            ['suit' => Suit::Clubs, 'value' => Value::King],
            //Spades
            ['suit' => Suit::Spades, 'value' => Value::Ace],
            ['suit' => Suit::Spades, 'value' => Value::Two],
            ['suit' => Suit::Spades, 'value' => Value::Three],
            ['suit' => Suit::Spades, 'value' => Value::Four],
            ['suit' => Suit::Spades, 'value' => Value::Five],
            ['suit' => Suit::Spades, 'value' => Value::Six],
            ['suit' => Suit::Spades, 'value' => Value::Seven],
            ['suit' => Suit::Spades, 'value' => Value::Eight],
            ['suit' => Suit::Spades, 'value' => Value::Nine],
            ['suit' => Suit::Spades, 'value' => Value::Ten],
            ['suit' => Suit::Spades, 'value' => Value::Knight],
            ['suit' => Suit::Spades, 'value' => Value::Queen],
            ['suit' => Suit::Spades, 'value' => Value::King],
        ];
    }
}