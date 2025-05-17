<?php

use PHPUnit\Framework\TestCase;
use JohannLindell\DeckOfCards\Decks\Standard52Card\SuitedCard;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Suit;
use JohannLindell\DeckOfCards\Decks\Standard52Card\Value;

class SuitedCardTest extends TestCase
{
    public function testGetters()
    {
        $expectedValue = Value::Four;
        $expectedSuit = Suit::Diamonds;
        $card = $this->getCard($expectedValue, $expectedSuit);
        $this->assertEquals($expectedValue->name, $card->value());
        $this->assertEquals($expectedSuit, $card->suit());
    }

    public function testToString()
    {
        $suit = Suit::Spades;
        $value = Value::Queen;
        $card = $this->getCard($value, $suit);
        $expectedString = Suit::Spades->name . '::' . Value::Queen->name;
        $this->assertEquals($expectedString, $card->toString());
    }

    public function testCompare()
    {
        $value = Value::Ace;
        $suit = Suit::Clubs;
        $cardOne = $this->getCard($value, $suit);
        $cardTwo = $this->getCard($value, $suit);
        $this->assertTrue($cardOne->compare($cardTwo));
        
        $cardThree = $this->getCard(Value::King, $suit);
        $this->assertFalse($cardOne->compare($cardThree));

        $cardFour = $this->getCard($value, Suit::Hearts);
        $this->assertFalse($cardOne->compare($cardFour));
    }

    private function getCard(Value $value, Suit $suit) : SuitedCard
    {
        return new SuitedCard($value, $suit);
    }
}