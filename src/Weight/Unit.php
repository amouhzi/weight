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
 * Class Unit
 * @package Weight
 */
class Unit
{
    const YOCTOGRAM = 1E-24;
    const ZEPTOGRAM = 1E-21;
    const ATTOGRAM = 1E-18;
    const FEMTOGRAM = 1E-15;
    const PICOGRAM = 1E-12;
    const NANOGRAM = 1E-9;
    const MICROGRAM = 1E-6;

    /**
     * Milligram
     */
    const MILLIGRAM = 0.001;
    const CENTIGRAM = 0.01;

    /**
     * jeweller's grain or pearl grain
     *
     * The unit formerly used by jewellers to measure pearls, diamonds, or other precious stones
     */
    const PEARL_GRAIN = 0.5;
    const JEWELLER_GRAIN = 0.5;

    /**
     * a unit of measurement of mass.
     * It is nominally based upon the mass of a single seed of a cereal.
     */
    const GRAIN = 0.06479891;

    const DECIGRAM = 0.1;

    /**
     * It is used for measuring gemstones and pearls.
     */
    const CARAT = 0.2;

    /**
     * "the absolute weight of a volume of pure water equal to the cube of
     * the hundredth part of a metre, and at the temperature of melting ice"
     * Décret relatif aux poids et aux mesures, 1795
     */
    const GRAM = 1;
    const DECAGRAM = 10;

    /**
     * Roman/Italian ounce (oncia)
     */
    const ONCIA = 27.4;

    /**
     * Maria Theresa ounce
     */
    const MARIA_THERESA_OUNCE = 28.0668;

    /**
     * International avoirdupois ounce
     */
    const OUNCE = 28.349523125;

    /**
     * Portuguese ounce (onça)
     */
    const ONCA = 28.69;

    /**
     * Spanish ounce (onza)
     */
    const ONZA = 28.75;

    const TOWER_OUNCE = 29.195;

    /**
     * French ounce (once)
     */
    const ONCE = 30.59;

    /**
     * International troy ounce
     * Apothecaries' ounce
     */
    const TROY_OUNCE = 31.1034768;

    /**
     * Chinese metric ounce (盎司)
     */
    const CHINESE_OUNCE = 50;

    const HECTOGRAM = 100;

    /**
     * Dutch metric ounce (ons)
     */
    const ONS = 100;

    const TOWER_MARK = 233.276;

    const TOWER_POUND = 349.914;

    const KILOGRAM = 1000;
    const TONNE = 1E6;
    const GIGAGRAM = 1E9;
    const TERAGRAM = 1E12;
    const PETAGRAM = 1E15;
    const EXAGRAM = 1E18;
    const ZETTAGRAM = 1E21;
    const YOTTAGRAM = 1E24;

    /**
     * The value in current unit
     *
     * @var float
     */
    private $value;

    /**
     * Contructor
     *
     * @param $unit
     * @throws \InvalidArgumentException
     */
    public function __construct($unit)
    {
        if (is_numeric($unit)) {
            $this->value = $unit;
        } else {
            switch ($unit) {
                case 'yg' :
                    $this->value = self::YOCTOGRAM;
                    break;
                case 'zg' :
                    $this->value = self::ZEPTOGRAM;
                    break;
                case 'Ag' :
                case 'AG' :
                case 'ag' :
                    $this->value = self::ATTOGRAM;
                    break;
                case 'Fg' :
                case 'FG' :
                case 'fg' :
                    $this->value = self::FEMTOGRAM;
                    break;
                case 'pg' :
                    $this->value = self::PICOGRAM;
                    break;
                case 'Ng' :
                case 'NG' :
                case 'ng' :
                    $this->value = self::NANOGRAM;
                    break;
                case 'mcg':
                case 'Mcg':
                case 'MCG':
                case 'µg' :
                    $this->value = self::MICROGRAM;
                    break;
                case 'mg' :
                    $this->value = self::MILLIGRAM;
                    break;
                case 'Cg' :
                case 'CG' :
                case 'cg' :
                    $this->value = self::CENTIGRAM;
                    break;
                case 'Dg' :
                case 'DG' :
                case 'dg' :
                    $this->value = self::DECIGRAM;
                    break;
                case 'g'  :
                case 'G'  :
                    $this->value = self::GRAM;
                    break;
                case 'dag':
                case 'Dag':
                case 'DAG':
                    $this->value = self::DECAGRAM;
                    break;
                case 'hg' :
                case 'Hg' :
                case 'HG' :
                    $this->value = self::HECTOGRAM;
                    break;
                case 'kg' :
                case 'Kg' :
                case 'KG' :
                    $this->value = self::KILOGRAM;
                    break;
                case 'Mg' :
                case 'MG' :
                    $this->value = self::TONNE;
                    break;
                case 'gg' :
                case 'Gg' :
                case 'GG' :
                    $this->value = self::GIGAGRAM;
                    break;
                case 'tg' :
                case 'Tg' :
                case 'TG' :
                    $this->value = self::TERAGRAM;
                    break;
                case 'Pg' :
                case 'PG' :
                    $this->value = self::PETAGRAM;
                    break;
                case 'eg' :
                case 'Eg' :
                case 'EG' :
                    $this->value = self::EXAGRAM;
                    break;
                case 'Zg' :
                case 'ZG' :
                    $this->value = self::ZETTAGRAM;
                    break;
                case 'Yg' :
                case 'YG' :
                    $this->value = self::YOTTAGRAM;
                    break;

                default :
                    $unit = strtolower($unit);
                    switch ($unit) {
                        case 'yoctogram':
                            $this->value = self::YOCTOGRAM;
                            break;
                        case 'zeptogram':
                            $this->value = self::ZEPTOGRAM;
                            break;
                        case 'attogram' :
                            $this->value = self::ATTOGRAM;
                            break;
                        case 'femtogram':
                            $this->value = self::FEMTOGRAM;
                            break;
                        case 'picogram' :
                            $this->value = self::PICOGRAM;
                            break;
                        case 'nanogram' :
                            $this->value = self::NANOGRAM;
                            break;
                        case 'microgram':
                            $this->value = self::MICROGRAM;
                            break;
                        case 'milligram':
                            $this->value = self::MILLIGRAM;
                            break;
                        case 'centigram':
                            $this->value = self::CENTIGRAM;
                            break;
                        case 'decigram' :
                            $this->value = self::DECIGRAM;
                            break;
                        case 'gram'     :
                            $this->value = self::GRAM;
                            break;
                        case 'decagram' :
                            $this->value = self::DECAGRAM;
                            break;
                        case 'hectogram':
                            $this->value = self::HECTOGRAM;
                            break;
                        case 'kilogram' :
                            $this->value = self::KILOGRAM;
                            break;
                        case 'tonne'    :
                        case 'megagram' :
                            $this->value = self::TONNE;
                            break;
                        case 'gigagram' :
                            $this->value = self::GIGAGRAM;
                            break;
                        case 'teragram' :
                            $this->value = self::TERAGRAM;
                            break;
                        case 'petagram' :
                            $this->value = self::PETAGRAM;
                            break;
                        case 'exagram'  :
                            $this->value = self::EXAGRAM;
                            break;
                        case 'zettagram':
                            $this->value = self::ZETTAGRAM;
                            break;
                        case 'yottagram':
                            $this->value = self::YOTTAGRAM;
                            break;

                        default:
                            throw new \InvalidArgumentException("Unkown unit: $unit");
                    }
            }
        }
    }

    public static function __set_state($values)
    {
        return new Unit($values['value']);
    }

    public function __toString()
    {
        return $this->getName();
    }

    public function getName($short = true)
    {
        $value = null;
        switch ($this->value) {
            case  self::YOCTOGRAM:
                $value = 'yoctogram';
                break;
            case  self::ZEPTOGRAM:
                $value = 'zeptogram';
                break;
            case  self::ATTOGRAM:
                $value = 'attogram';
                break;
            case  self::FEMTOGRAM:
                $value = 'femtogram';
                break;
            case  self::PICOGRAM:
                $value = 'picogram';
                break;
            case  self::NANOGRAM:
                $value = 'nanogram';
                break;
            case  self::MICROGRAM:
                $value = 'microgram';
                break;
            case  self::MILLIGRAM:
                $value = 'milligram';
                break;
            case  self::CENTIGRAM:
                $value = 'centigram';
                break;
            case  self::DECIGRAM:
                $value = 'decigram';
                break;
            case  self::GRAM:
                $value = 'gram';
                break;
            case  self::DECAGRAM:
                $value = 'decagram';
                break;
            case  self::HECTOGRAM:
                $value = 'hectogram';
                break;
            case  self::KILOGRAM:
                $value = 'kilogram';
                break;
            case  self::TONNE:
                $value = 'tonne';
                break;
            case  self::GIGAGRAM:
                $value = 'gigagram';
                break;
            case  self::TERAGRAM:
                $value = 'teragram';
                break;
            case  self::PETAGRAM:
                $value = 'petagram';
                break;
            case  self::EXAGRAM:
                $value = 'exagram';
                break;
            case  self::ZETTAGRAM:
                $value = 'zettagram';
                break;
            case  self::YOTTAGRAM:
                $value = 'yottagram';
                break;
        }
        if ($short) {
            switch ($value) {
                case 'yoctogram':
                    $value = 'yg';
                    break;
                case 'zeptogram':
                    $value = 'zg';
                    break;
                case 'attogram' :
                    $value = 'ag';
                    break;
                case 'femtogram':
                    $value = 'fg';
                    break;
                case 'picogram' :
                    $value = 'pg';
                    break;
                case 'nanogram' :
                    $value = 'ng';
                    break;
                case 'microgram':
                    $value = 'µg';
                    break;
                case 'milligram':
                    $value = 'mg';
                    break;
                case 'centigram':
                    $value = 'cg';
                    break;
                case 'decigram' :
                    $value = 'dg';
                    break;
                case 'gram'     :
                    $value = 'g';
                    break;
                case 'decagram' :
                    $value = 'dag';
                    break;
                case 'hectogram':
                    $value = 'hg';
                    break;
                case 'kilogram' :
                    $value = 'Kg';
                    break;
                case 'tonne'    :
                    $value = 'Mg';
                    break;
                case 'gigagram' :
                    $value = 'Gg';
                    break;
                case 'teragram' :
                    $value = 'Tg';
                    break;
                case 'petagram' :
                    $value = 'Pg';
                    break;
                case 'exagram'  :
                    $value = 'Eg';
                    break;
                case 'zettagram':
                    $value = 'Zg';
                    break;
                case 'yottagram':
                    $value = 'Yg';
                    break;
            }
        }
        return $value;
    }

    /**
     * Get the value in grams
     *
     * @return float
     */
    public function grams()
    {
        return $this->value;
    }
} 
