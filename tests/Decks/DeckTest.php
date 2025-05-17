<?php

use PHPUnit\Framework\TestCase;
use JohannLindell\DeckOfCards\Decks\Deck;
use JohannLindell\DeckOfCards\Cards\Card;


class TestingDeck extends Deck
{
    public function __construct()
    {
        parent::__construct();
        $this->deck = $this->buildDeck();
    }
    
    protected function buildDeck(): array
    {
        return [
            new Card('a'),
            new Card('b'),
            new Card('c'),
            new Card('d'),
            new Card('e'),
            new Card('f'),
            new Card('g'),
            new Card('h'),
            new Card('i'),
            new Card('j'),
            new Card('k'),
            new Card('l'),
            new Card('m'),
            new Card('n'),
            new Card('o'),
            new Card('p'),
        ];
    }
}

class DeckTest extends TestCase
{
    public function testPeek()
    {
        $deck = new TestingDeck();
        $this->assertTrue((new Card('a'))->compare($deck->peek()));
    }

    public function testEnd()
    {
        $deck = new TestingDeck();
        $this->assertTrue((new Card('p'))->compare($deck->end()));
    }

    public function testShuffle()
    {
        $deck = new TestingDeck();
        $deck->shuffle();
        $this->assertNotEquals($deck, new TestingDeck(), 'Decks were equal');
    }

    public function testCut()
    {
        $deck = new TestingDeck();
        $deck->cut();
        $this->assertNotEquals($deck, new TestingDeck(), 'Deck was not cut');
    }

    public function testRemoveCard()
    {
        $deck = new TestingDeck();
        $card = $deck->removeCard();
        $this->assertTrue($card->compare(new Card('a')));
        $this->assertEquals(new Card('b'), $deck->peek());
    }

    public function testRemoveCards()
    {
        $deck = new TestingDeck();
        $deck->removeCards(2);
        $this->assertEquals(new Card('c'), $deck->peek());

    }
}