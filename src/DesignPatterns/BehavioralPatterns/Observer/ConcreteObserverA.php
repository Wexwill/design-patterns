<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Observer;

use SplObserver;
use SplSubject;

/**
 * Конкретные Наблюдатели реагируют на обновления, выпущенные Издателем, к
 * которому они прикреплены.
 */
class ConcreteObserverA implements SplObserver
{
    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        if ($subject->state < 3) {
            echo "ConcreteObserverA: Reacted to the event.<br />";
        }
    }
}