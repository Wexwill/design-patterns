<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Iterator;

use Iterator;
use Traversable;

/**
 * Конкретные Коллекции предоставляют один или несколько методов для получения
 * новых экземпляров итератора, совместимых с классом коллекции.
 */
class WordsCollection implements \IteratorAggregate
{

    /**
     * @var array
     */
    private array $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param $item
     * @return void
     */
    public function addItem($item): void
    {
        $this->items[] = $item;
    }

    /**
     * @inheritDoc
     */
    public function getIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    /**
     * @return Iterator
     */
    public function getReverseIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}