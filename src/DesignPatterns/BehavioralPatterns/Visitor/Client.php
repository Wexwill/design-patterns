<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Visitor;

class Client
{
    public function clientCode(array $components, Visitor $visitor): void
    {
        foreach ($components as $component) {
            $component->accept($visitor);
        }
    }
}