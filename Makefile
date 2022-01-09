install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

composer:
	composer validate
	composer dump-autoload

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin