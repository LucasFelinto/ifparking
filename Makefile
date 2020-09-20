start:
	cp .env.example .env
	composer install
	php artisan key:generate
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve

git-lucas:
	git config --global user.name "LucasFelinto"
	git config --global user.email "elucasfelinto@gmail.com"

