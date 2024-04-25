<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Command;

/**
 * Интерфейс Команды объявляет метод для выполнения команд.
 */
interface Command
{
    public function execute(): void;
}