<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Strategy;

/**
 * Интерфейс Стратегии объявляет операции, общие для всех поддерживаемых версий
 * некоторого алгоритма.
 *
 * Контекст использует этот интерфейс для вызова алгоритма, определённого
 * Конкретными Стратегиями.
 */
interface Strategy
{
    public function doAlgorithm(array $data): array;
}