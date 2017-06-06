# test

- co su testy
- `echo`, `var_dump`
- unit, integracne
- rozne nastroje:
	- [phpunit](https://phpunit.de/index.html), [phpspec](http://www.phpspec.net/en/stable/), [nette/tester](https://tester.nette.org/)
- strong typing a typova analyza

## test
- stiahnutie repozitara
	- https://github.com/crazko/test
	- `git clone git@github.com:crazko/test.git`
- nainstalovanie zavislosti
- vyskusanie `./vendor/bin/phpunit --version`
- prvy test
- composer script
- druhy test kalkulacka
	- TDD
	- dataProvider
	- dopisat metodu execute s roznymi operatormi

## eshop
- otestovat Produkt
- `composer require --dev phpunit/phpunit`
- uprava `composer.json`
	- pridat zlozku tests
- `tests/Classes/ProductTest.php`