<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\TemplateMethod;

class Client
{
    public function clientCode(AbstractClass $class): void
    {
        $class->templateMethod();
    }
}