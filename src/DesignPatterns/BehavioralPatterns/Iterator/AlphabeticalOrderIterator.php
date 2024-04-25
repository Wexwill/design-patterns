<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Iterator;

/**
 * Конкретные Итераторы реализуют различные алгоритмы обхода. Эти классы
 * постоянно хранят текущее положение обхода.
 */
class AlphabeticalOrderIterator implements \Iterator
{

    /**
     * @var WordsCollection
     */
    private WordsCollection $collection;

    /**
     *  Хранит текущее положение обхода. У итератора может быть
     *  множество других полей для хранения состояния итерации, особенно когда он
     *  должен работать с определённым типом коллекции.
     *
     * @var int
     */
    private int $position = 0;

    /**
     * Эта переменная указывает направление обхода.
     *
     * @var bool
     */
    private mixed $reverse = false;

    /**
     * @param WordsCollection $collection
     * @param bool $reverse
     */
    public function __construct(WordsCollection $collection, bool $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->collection->getItems()[$this->position];
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * @return void
     */
    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}