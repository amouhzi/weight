<?php

namespace Weight;

class WeightTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {

        $weight = new Weight(300, new Unit('KG'));
        $this->assertEquals('300 Kg', (string) $weight);

        $weight = new Weight(300.98, new Unit('KG'));
        $this->assertEquals('300.98 Kg', (string)$weight);

        $weight = new Weight(300.98, new Unit('KG'));
        $grams = $weight->to(UNIT::GRAM);
        $this->assertEquals('300,980 g', (string)$grams);

        $weight = new Weight(300.98, new Unit('KG'));
        $tonnes = $weight->to('tonne');
        $this->assertEquals('0.30 Mg', (string)$tonnes);

        $weight = new Weight(15, 'KG');
        $this->assertEquals('15 Kg', (string)$weight);

        $this->assertEquals('Kg', $weight->getUnit()->getName());
        $this->assertEquals(15, $weight->getValue());

    }

}
