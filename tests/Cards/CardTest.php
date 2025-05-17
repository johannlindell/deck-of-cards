<?php


use PHPUnit\Framework\TestCase;
use JohannLindell\DeckOfCards\Cards\Card;

class CardTest extends TestCase
{
    public function testGetters()
    {
        $expectedValue = 'testValue';
        $this->assertEquals($expectedValue, $this->getCard($expectedValue)->value());
    }

    public function testToString()
    {
        $expectedString = 'valueString';
        $this->assertEquals($expectedString, $this->getCard($expectedString)->toString());
    }

    public function testCompare()
    {
        $value = 'aaa';
        $cardOne = new Card($value);
        $cardTwo = new Card($value);
        $this->assertTrue($cardOne->compare($cardTwo));
    }

    private function getCard(string $value) : Card
    {
        return new Card($value);
    }
}