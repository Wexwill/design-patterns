<?php

namespace PhpSite\DesignPatterns\BehavioralPatterns\Strategy;

use PhpSite\DesignPatterns\BehavioralPatterns\Strategy\Strategy;

class ConcreteStrategyB implements Strategy
{

    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}