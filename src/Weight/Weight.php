<?php
/**
 * This file is part of the Weight package.
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Hassan Amouhzi
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Weight;

/**
 * Class Weight
 * @package Weight
 */
class Weight
{
    /**
     * The value.
     *
     * @var int|float
     */
    private $value;
    /**
     * The unit of measure.
     *
     * @var Unit
     */
    private $unit;

    /**
     * Constructor.
     *
     * @param int|float $value
     * @param int|float|Unit $unit
     * @throws \InvalidArgumentException
     */
    public function __construct($value, $unit)
    {
        if (!is_numeric($value)) {
            throw new \InvalidArgumentException('Argument 1 passed to ' .
                'Weight\\Weight::__construct() must be nemeric, '
                . gettype($value) . ' given');
        }
        if (is_numeric($unit) || is_string($unit)) {
            $unit = new Unit($unit);
        } elseif (!($unit instanceof Unit)) {
            throw new \InvalidArgumentException('Argument 2 passed to ' .
                'Weight\\Weight::__construct() must be nemeric, string or an instance of Weightr\\Unit, '
                . gettype($unit) . ' given');
        }
        $this->value = $value;
        $this->unit = $unit;
    }

    public static function __set_state($values)
    {
        return new Weight($values['value'], $values['unit']);
    }

    /**
     * Magic function __toString
     *
     * @return string
     */
    public function __toString()
    {

        $decimalPoint = '.';
        $thousandsSeparator = ',';

        $number = round($this->value, 2);
        if($number == (int) $number) {
            $decimals = 0;
        } else {
            $decimals = 2;
        }

        return number_format($this->value, $decimals, $decimalPoint, $thousandsSeparator) .
        ' ' . $this->getUnit();
    }

    /**
     * Gets the unit of measure
     *
     * @return \Weight\Unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets the Unit of measure
     *
     * @param \Weight\Unit $unit
     */
    public function setUnit(Unit $unit)
    {
        $this->unit = $unit;
    }

    /**
     * Gets the number
     *
     * @return float|int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param int|float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function to($newUnit)
    {
        $unit = new Unit($newUnit);
        return new Weight($this->value * $this->unit->grams() / $unit->grams(),
            $unit);
    }

} 