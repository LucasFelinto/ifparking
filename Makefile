start:
	cp .env.example .env
	composer install
	php artisan key:generate
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve

git-lucas:
	git config --global user.name "LucasFelinto"
	git config --global user.email "elucasfelinto@gmail.com"https://github.com/LucasFelinto/ifparking.git

git-thierry:
	git config --global user.name "ThierryMatheus"
	git config --global user.email "thierrymatheusreal@gmail.com"

git-patrick:
	git config --global user.name "Patrick-Santana"
    git config --global user.email "zonaabissal2016@gmail.com"

git-Miguel:
	git config --global user.name "miguelgabriel01"
    git config --global user.email "mgbs@discente.ifpe.edu.br"

git-Bruno:
	git config --global user.name "brunomanoel2019"
    git config --global user.email "brunomanoel2019_2019@outlook.com"
    
git-Giovanna:
    git config --global user.name "giovannafernands"
    git config --global user.email "giovannafernandes134@gmail.com"
    
git-Vinicius:
	git config --global user.name "augusto.farias"
	git config --global user.email "vinicinho1237@gmail.com"
    
git-Maria C.:
    git config --global user.name "MARIA617"
    git config --global user.email "mariac4682@gmail.com"


