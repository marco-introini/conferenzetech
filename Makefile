check:
	./vendor/bin/phpstan analyse
	./vendor/bin/rector --dry-run

recreate:
	rm -f storage/app/public/conferences/*
	php artisan migrate:fresh
	php artisan db:seed


