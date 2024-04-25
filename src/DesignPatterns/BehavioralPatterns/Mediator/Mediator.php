<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Mediator;

/**
 * Интерфейс Посредника предоставляет метод, используемый компонентами для
 * уведомления посредника о различных событиях. Посредник может реагировать на
 * эти события и передавать исполнение другим компонентам.
 */
interface Mediator
{
    public function notify(object $sender, string $event): void;
}