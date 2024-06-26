<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Observer;

use SplObjectStorage;
use SplSubject;

/**
 * Издатель владеет некоторым важным состоянием и оповещает наблюдателей о его
 * изменениях.
 */
class Subject implements SplSubject
{
    /**
     * @var int Для удобства в этой переменной хранится состояние Издателя,
     * необходимое всем подписчикам.
     */
    public $state;

    /**
     * @var SplObjectStorage Список подписчиков. В реальной жизни список
     * подписчиков может храниться в более подробном виде (классифицируется по
     * типу события и т.д.)
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(\SplObserver $observer): void
    {
        echo "Subject: Attached an observer.<br />";
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.<br />";
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        echo "Subject: Notifying observers...<br />";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Обычно логика подписки – только часть того, что делает Издатель. Издатели
     * часто содержат некоторую важную бизнес-логику, которая запускает метод
     * уведомления всякий раз, когда должно произойти что-то важное (или после
     * этого).
     */
    public function someBusinessLogic(): void
    {
        echo "<br />nSubject: I'm doing something important.<br />";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}<br />";
        $this->notify();
    }
}