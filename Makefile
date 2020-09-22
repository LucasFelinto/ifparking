start:
	cp .env.example .env
	composer install
	php artisan key:generate
	npm install
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve

git-lucas:
	git config --global user.name "LucasFelinto"
	git config --global user.email "elucasfelinto@gmail.com"

git-thierry:
	git config --global user.name "ThierryMatheus"
	git config --global user.email "thierrymatheusreal@gmail.com"
    
git-Miguel:
	git config --global user.name "miguelgabriel01"
    git config --global user.email "mgbs@discente.ifpe.edu.br"
    
