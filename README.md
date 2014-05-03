PHP Weight Class
================

PHP Weight Class helps developers to work with mass units.

Examples
========

Two ways to create new weight
-----------------------------

1-

```
$weight = new Weight(300, new Unit('KG'));
echo $weight; // 300 Kg
$wight->getValue() // returns 300
$weight->getUnit() // return Weight/Unit of KG.
```

2-

```
$weight = new Weight(15, 'KG');
```

Print formatted weight
----------------------

```
echo $weight;
```

shows

```
300 Kg
```

Convert to another unit
-----------------------

```
$kgs = new Weight(300, new Unit('KG'));
$grams = $kgs->to(UNIT::GRAM);
echo (string) $grams;
```

shows

```
300,000.00 g
```

Another way to convert
-----------------------

```
$tonnes = $kgs->to('tonne');
echo (string) $tonnes;
```

shows

```
0.30 Mg
```
