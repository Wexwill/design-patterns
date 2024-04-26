<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\State;

/**
 * Базовый класс Состояния объявляет методы, которые должны реализовать все
 * Конкретные Состояния, а также предоставляет обратную ссылку на объект
 * Контекст, связанный с Состоянием. Эта обратная ссылка может использоваться
 * Состояниями для передачи Контекста другому Состоянию.
 */
abstract class State
{
    /**
     * @var Context
     */
    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle1(): void;

    abstract public function handle2(): void;
}