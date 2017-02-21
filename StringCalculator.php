<?php

namespace SergioDeCandelario\FizzBuzzExtendedKata;

/**
 * StringCalculador
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
class StringCalculator
{
    private $number;

    /**
     * @var Calculator[]
     */
    private $calculators;

    /**
     * StringCalculator constructor.
     *
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
        $this->calculators = [];
        $this->addCalculators();
    }

    private function addCalculators()
    {
        $this->calculators[] = new Calculator('fuzz', 2);
        $this->calculators[] = new Calculator('fizz', 3);
        $this->calculators[] = new Calculator('buzz', 5);
        $this->calculators[] = new Calculator('pop', 7);
    }

    public function calculate()
    {
        $result = [];

        foreach ($this->calculators as $calculator) {
            if ($stringResult = $calculator->checkNumber($this->number)) {
                $result[] = $stringResult;
            }
        }

        if (empty($result)) {
            return $this->number;
        }

        return implode(' ', $result);
    }
}