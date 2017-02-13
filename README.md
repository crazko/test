# test

- co su testy
- `echo`, `var_dump`
- unit, integracne, behavioralne, akceptacne
- rozne nastroje:
	- [phpunit](https://phpunit.de/index.html), [phpspec](http://www.phpspec.net/en/stable/), [nette/tester](https://tester.nette.org/)

## test
- stiahnutie repozitara
	- https://github.com/crazko/test
	- `git clone git@github.com:crazko/test.git`
- vyskusanie `./vendor/bin/phpunit --version`
- prvy test
- druhy test kalkulacka
	- TDD
	- dataProvider
	- dopisat metodu execute s roznymi operatormi - podla casu

## eshop
- otestovat Produkt
- `composer require --dev phpunit/phpunit`
- uprava composer.json
	- pridat zlozku test
- `tests/Classes/ProductTest.php`