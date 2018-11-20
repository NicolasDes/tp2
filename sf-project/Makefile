.PHONY:
install-deps:
	docker-compose run --rm php composer install
	docker-compose run --rm php composer require --dev symfony/phpunit-bridge

.env:
	cp .env.dist .env

.PHONY:
start:
	docker-compose up -d

.PHONY:
stop:
	docker-compose stop

.PHONY:
entity:
	docker-compose run php /app/bin/console make:entity

.PHONY:
units:
	docker-compose run php /app/bin/phpunit /app/src/Entity/User.test.php