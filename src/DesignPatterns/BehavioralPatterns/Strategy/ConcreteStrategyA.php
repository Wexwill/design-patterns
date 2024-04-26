<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Strategy;

use PhpSite\DesignPatterns\BehavioralPatterns\Strategy\Strategy;

class ConcreteStrategyA implements Strategy
{

    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}