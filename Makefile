check:
	./vendor/bin/phpstan

recreate:
	php artisan migrate:fresh
	php artisan db:seed


