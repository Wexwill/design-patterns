<?php

use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\Client as CorClient;
use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\DogHandler;
use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\MonkeyHandler;
use PhpSite\DesignPatterns\BehavioralPatterns\ChainOfResponsibility\SquirrelHandler;
use PhpSite\DesignPatterns\BehavioralPatterns\Command\Client as CommandClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Iterator\Client as IteratorClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Mediator\Client as MediatorClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Memento\Client as MementoClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Observer\Client as ObserverClient;

require __DIR__ . '/../vendor/autoload.php';

// ------------------------------- ЦЕПОЧКА ОБЯЗАННОСТЕЙ -------------------------------
echo '<br />';
echo '<h2>Цепочка обязанностей — это поведенческий паттерн, 
позволяющий передавать запрос по цепочке потенциальных обработчиков, 
пока один из них не обработает запрос.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/chain-of-responsibility" target="_blank">Ссылка</a>';
echo '<br />';
echo '';

$corClient = new CorClient();
$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($squirrel)->setNext($dog);

echo "Chain: Monkey > Squirrel > Dog";
echo '<br />';
$corClient->clientCode($monkey);
echo '<br />';
// Клиент должен иметь возможность отправлять запрос любому обработчику, а не только первому в цепочке.
echo "Subchain: Squirrel > Dog";
echo '<br />';
$corClient->clientCode($squirrel);

// ------------------------------- КОМАНДА -------------------------------
echo '<br />';
echo '<h2>Команда — это поведенческий паттерн проектирования, который превращает запросы в объекты, позволяя передавать их как аргументы при вызове методов, ставить запросы в очередь, логировать их, а также поддерживать отмену операций.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/command" target="_blank">Ссылка</a>';
echo '<br />';
$commandClient = new CommandClient();
$commandClient->clientCode();

// ------------------------------- ИТЕРАТОР -------------------------------
echo '<br />';
echo '<h2>Итератор — это поведенческий паттерн, позволяющий последовательно обходить сложную коллекцию, без раскрытия деталей её реализации.</h2>';
echo 'PHP имеет встроенный интерфейс для поддержки итераторов (Iterator), на основании которого можно строить свои Итераторы, совместимые с остальным PHP-кодом.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/iterator" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new IteratorClient();
$iteratorClient->clientCode();

// ------------------------------- ПОСРЕДНИК -------------------------------
echo '<br />';
echo '<h2>Посредник — это поведенческий паттерн проектирования, который позволяет уменьшить связанность множества классов между собой, благодаря перемещению этих связей в один класс-посредник.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/mediator" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new MediatorClient();
$iteratorClient->clientCode();

// ------------------------------- СНИМОК -------------------------------
echo '<br />';
echo '<h2>Снимок — это поведенческий паттерн проектирования, который позволяет сохранять и восстанавливать прошлые состояния объектов, не раскрывая подробностей их реализации.</h2>';
echo 'Реальная применимость паттерна Снимок в мире PHP под большим вопросом. Чаще всего задачу хранения копии состояния можно решить куда проще при помощи сериализации.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/memento" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new MementoClient();
$iteratorClient->clientCode();

// ------------------------------- НАБЛЮДАТЕЛЬ -------------------------------
echo '<br />';
echo '<h2>Наблюдатель — это поведенческий паттерн проектирования, который создаёт механизм подписки, позволяющий одним объектам следить и реагировать на события, происходящие в других объектах.</h2>';
echo 'PHP имеет несколько встроенных интерфейсов (SplSubject, SplObserver), на которых можно строить свои реализации Наблюдателя, совместимые с остальным PHP-кодом.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/memento" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new ObserverClient();
$iteratorClient->clientCode();


