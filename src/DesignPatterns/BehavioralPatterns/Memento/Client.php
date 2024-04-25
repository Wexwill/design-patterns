<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Memento;

class Client
{
    public function clientCode(): void
    {
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "<br />------------------";
        $caretaker->showHistory();

        echo "<br />Client: Now, lets rollback!<br />";
        $caretaker->undo();

        echo "<br />Client: Once more!<br />";
        $caretaker->undo();
    }
}