<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Observer;

use SplObserver;
use SplSubject;

class ConcreteObserverB implements SplObserver
{
    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo "ConcreteObserverB: Reacted to the event.<br />";
        }
    }
}