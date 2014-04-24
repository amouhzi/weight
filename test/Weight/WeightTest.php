<?php

namespace Weight;

use Number\Number;

class WeightTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {

        Number::setDecimals(2);

        $weight = new Weight(300, new Unit('KG'));

        $this->assertEquals('300.00 Kg', (string)$weight);

        $grams = $weight->to(UNIT::GRAM);
        $this->assertEquals('300,000.00 g', (string)$grams);

        $tonnes = $weight->to('tonne');
        $this->assertEquals('0.30 Mg', (string)$tonnes);

        $weight = new Weight(15, 'KG');
        $this->assertEquals('15.00 Kg', (string)$weight);

        $this->assertEquals('Kg', $weight->getUnit()->getName());
        $this->assertEquals(15, $weight->getValue());

    }

}
