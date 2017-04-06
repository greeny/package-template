# Package template for PHP

This is a template for PHP library. It features pre-installed libraries:
- nette/tester
- slevomat/coding-standard
- consistence/coding-standard
- jakub-onderka/php-parallel-lint
- phpstan/phpstan

It also has .travis.yml file for fast setup.

Made for PHP 7.1 and tested on it, may work on earlier versions with some modifications to enabled Sniffs and PHPStan tests.

## Starting new package

1. create project


	composer create-project greeny/package-template YourAwesomeProjectName
	
2. change composer.json to provide correct information about your package / vendor name, autoloading settings, description and author
3. write code to src folder
4. test your code using `composer build`
5. setup travis integration (enable travis testing for your repository, there is already .travis.yml file present)
6. profit



Feel free to use this and/or suggest changes. I am open to anything.
