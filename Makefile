check:
	./vendor/bin/phpstan analyse
	./vendor/bin/rector --dry-run

recreate:
	php artisan migrate:fresh
	php artisan db:seed


