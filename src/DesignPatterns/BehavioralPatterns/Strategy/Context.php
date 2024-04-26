<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Strategy;

/**
 * Контекст определяет интерфейс, представляющий интерес для клиентов.
 */
class Context
{
    /**
     * @var Strategy Контекст хранит ссылку на один из объектов Стратегии.
     * Контекст не знает конкретного класса стратегии. Он должен работать со
     * всеми стратегиями через интерфейс Стратегии.
     */
    private $strategy;

    /**
     * Обычно Контекст принимает стратегию через конструктор, а также
     * предоставляет сеттер для её изменения во время выполнения.
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Обычно Контекст позволяет заменить объект Стратегии во время выполнения.
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Вместо того, чтобы самостоятельно реализовывать множественные версии
     * алгоритма, Контекст делегирует некоторую работу объекту Стратегии.
     */
    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the strategy (not sure how it'll do it)<br />";
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "<br />";

        // ...
    }
}