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
use PhpSite\DesignPatterns\BehavioralPatterns\State\Client as StateClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Strategy\Client as StrategyClient;
use PhpSite\DesignPatterns\BehavioralPatterns\TemplateMethod\ConcreteClass1;
use PhpSite\DesignPatterns\BehavioralPatterns\TemplateMethod\ConcreteClass2;
use PhpSite\DesignPatterns\BehavioralPatterns\TemplateMethod\Client as TemplateMethodClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\Client as VisitorClient;
use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\ConcreteComponentA;
use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\ConcreteComponentB;
use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\ConcreteVisitor1;
use PhpSite\DesignPatterns\BehavioralPatterns\Visitor\ConcreteVisitor2;
use PhpSite\DesignPatterns\ValueObject;
use PhpSite\DesignPatterns\DataTransferObject;

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
echo '<h2>Команда — это поведенческий паттерн проектирования, который превращает запросы в объекты, 
позволяя передавать их как аргументы при вызове методов, ставить запросы в очередь, логировать их, 
а также поддерживать отмену операций.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/command" target="_blank">Ссылка</a>';
echo '<br />';
$commandClient = new CommandClient();
$commandClient->clientCode();

// ------------------------------- ИТЕРАТОР -------------------------------
echo '<br />';
echo '<h2>Итератор — это поведенческий паттерн, позволяющий последовательно обходить сложную коллекцию, 
без раскрытия деталей её реализации.</h2>';
echo 'PHP имеет встроенный интерфейс для поддержки итераторов (Iterator), 
на основании которого можно строить свои Итераторы, совместимые с остальным PHP-кодом.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/iterator" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new IteratorClient();
$iteratorClient->clientCode();

// ------------------------------- ПОСРЕДНИК -------------------------------
echo '<br />';
echo '<h2>Посредник — это поведенческий паттерн проектирования, 
который позволяет уменьшить связанность множества классов между собой, 
благодаря перемещению этих связей в один класс-посредник.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/mediator" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new MediatorClient();
$iteratorClient->clientCode();

// ------------------------------- СНИМОК -------------------------------
echo '<br />';
echo '<h2>Снимок — это поведенческий паттерн проектирования, 
который позволяет сохранять и восстанавливать прошлые состояния объектов, не раскрывая подробностей их реализации.</h2>';
echo 'Реальная применимость паттерна Снимок в мире PHP под большим вопросом. 
Чаще всего задачу хранения копии состояния можно решить куда проще при помощи сериализации.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/memento" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new MementoClient();
$iteratorClient->clientCode();

// ------------------------------- НАБЛЮДАТЕЛЬ -------------------------------
echo '<br />';
echo '<h2>Наблюдатель — это поведенческий паттерн проектирования, который создаёт механизм подписки, 
позволяющий одним объектам следить и реагировать на события, происходящие в других объектах.</h2>';
echo 'PHP имеет несколько встроенных интерфейсов (SplSubject, SplObserver), 
на которых можно строить свои реализации Наблюдателя, совместимые с остальным PHP-кодом.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/observer" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new ObserverClient();
$iteratorClient->clientCode();

// ------------------------------- СОСТОЯНИЕ -------------------------------
echo '<br />';
echo '<h2>Состояние — это поведенческий паттерн проектирования, 
который позволяет объектам менять поведение в зависимости от своего состояния.</h2>';
echo 'Поведения, зависящие от состояния, переезжают в отдельные классы. 
Первоначальный класс хранит ссылку на один из таких объектов-состояний и делегирует ему работу.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/state" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new StateClient();
$iteratorClient->clientCode();

// ------------------------------- СТРАТЕГИЯ -------------------------------
echo '<br />';
echo '<h2>Стратегия — это поведенческий паттерн проектирования, 
который определяет семейство схожих алгоритмов и помещает каждый из них в собственный класс, 
после чего алгоритмы можно взаимозаменять прямо во время исполнения программы.</h2>';
echo 'В Стратегии эти объекты не знают друг о друге и никак не связаны. 
В Состоянии сами конкретные состояния могут переключать контекст.';
echo '<br />';
echo '<a href="https://refactoring.guru/ru/design-patterns/strategy" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new StrategyClient();
$iteratorClient->clientCode();

// ------------------------------- ШАБЛОННЫЙ МЕТОД -------------------------------
echo '<br />';
echo '<h2>Шаблонный метод — это поведенческий паттерн проектирования, который определяет скелет алгоритма, 
перекладывая ответственность за некоторые его шаги на подклассы. 
Паттерн позволяет подклассам переопределять шаги алгоритма, не меняя его общей структуры.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/template-method" target="_blank">Ссылка</a>';
echo '<br />';
$iteratorClient = new TemplateMethodClient();
echo "Same client code can work with different subclasses:<br />";
$iteratorClient->clientCode(new ConcreteClass1());
echo "<br />";
echo "Same client code can work with different subclasses:<br />";
$iteratorClient->clientCode(new ConcreteClass2());

// ------------------------------- ПОСЕТИТЕЛЬ -------------------------------
echo '<br />';
echo '<h2>Посетитель — это поведенческий паттерн, который позволяет добавить новую операцию для целой иерархии классов, 
не изменяя код этих классов.</h2>';
echo '<a href="https://refactoring.guru/ru/design-patterns/visitor" target="_blank">Ссылка</a>';
echo '<br />';
$visitorClient = new VisitorClient();
$components = [
    new ConcreteComponentA(),
    new ConcreteComponentB(),
];
echo "The client code works with all visitors via the base Visitor interface:<br />";
$visitor1 = new ConcreteVisitor1();
$visitorClient->clientCode($components, $visitor1);
echo "<br />";

echo "It allows the same client code to work with different types of visitors:<br />";
$visitor2 = new ConcreteVisitor2();
$visitorClient->clientCode($components, $visitor2);

// ------------------------------- VALUE OBJECT -------------------------------
echo '<br />';
echo '<h2>Value Object в PHP — это паттерн проектирования, который представляет объекты, 
равенство которых не зависит от их идентичности. Это означает, что два Value Object считаются равными, 
если их значения равны, независимо от того, являются ли они одним и тем же экземпляром объекта или нет.</h2>';
echo '•  Неизменяемость: Value Objects должны быть неизменяемыми, то есть после их создания их состояние не может быть изменено.<br />
•  Самодостаточность: Value Object должен содержать все необходимые данные и поведение, связанные с этими данными.<br />
•  Равенство по значению: Два Value Object считаются равными, если их значения равны, а не их ссылки или идентификаторы.';
echo '<br />';

$point1 = new ValueObject(1.2902, 103.8519);
$point2 = new ValueObject(1.2902, 103.8519);
if ($point1->isEqual($point2)) {
    echo 'Точки равны.';
} else {
    echo 'Точки не равны.';
}

// ------------------------------- DATA TRANSFER OBJECT -------------------------------
echo '<br />';
echo '<h2>Data Transfer Object (DTO) в PHP — это шаблон проектирования, 
который используется для передачи данных между слоями и границами приложения, 
например, от сервера к клиенту или между различными компонентами системы. 
DTO обычно содержит только данные и не содержит никакой бизнес-логики.</h2>';
echo 'Основные характеристики DTO:<br />
•  Простота: DTO содержит только публичные свойства и не имеет методов, кроме конструктора и, возможно, методов сериализации/десериализации.<br />
•  Перенос данных: DTO используется для группировки данных и их переноса в одном вызове, вместо нескольких вызовов для каждого поля данных.<br />
•  Разграничение: DTO помогает разграничить бизнес-логику и логику переноса данных, упрощая тем самым поддержку и развитие приложения.<br />
В контексте PHP, DTO часто используется для передачи данных между слоями приложения, например, от сервера к клиенту, 
в то время как Value Object используется внутри слоя домена для представления конкретных значений, 
таких как денежные суммы, координаты и т.д., и обеспечивает операции, связанные с этими значениями. 
Value Object помогает обеспечить целостность и непротиворечивость данных в предметной области, 
в то время как DTO упрощает передачу данных между компонентами системы.';
echo '<br />';
// Создание DTO для пользователя
$userDTO = new DataTransferObject(1, 'Иван Иванов', 'ivan@example.com');