start:
	cp .env.example .env
	composer install
	php artisan key:generate
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve

git-Bruno:
	git config --global user.name "brunomanoel2019"
	git config --global user.email "brunomanoel2019_2019@outlook.com"

git-Erinston:
	git config --global user.name "erinston"
	git config --global user.email "erinstong@gmail.com"

git-Gabriella:
	git config --global user.name "gabriellabatista"
	git config --global user.email "gabriella10batista@gmail.com"

git-Giovanna:
	git config --global user.name "giovannafernands"
	git config --global user.email "giovannafernandes134@gmail.com"

git-Josivaldo:
	git config --global user.name "josivaldonatal"
	git config --global user.email "josivaldonatal@gmail.com"

git-Kaue:
	git config --global user.name "KaueLui"
	git config --global user.email "ofckaue@gmail.com"

git-Khevin:
	git config --global user.name "Khevin Karlos"
	git config --global user.name "karimoxiha@gmail.com"

git-Larissa:
	git config --global user.name "FerreiraLarissa"
	git config --global user.email "laryssaferreira12386@gmail.com"

git-lucas:
	git config --global user.name "LucasFelinto"
	git config --global user.email "elucasfelinto@gmail.com"

git-Luis:
	git config --global user.name "Luis Henrique"
	git config --global user.email "luis_henrique_co@hotmail.com"

git-Maria_C:
	git config --global user.name "MARIA617"
	git config --global user.email "mariac4682@gmail.com"

git-Mateus:
	git config --global user.name "Mateuslpds"
	git config --global user.email "mateusyasmim2014@gmail.com"

git-Miguel:
	git config --global user.name "miguelgabriel01"
	git config --global user.email "mgbs@discente.ifpe.edu.br"

git-patrick:
	git config --global user.name "Patrick-Santana"
	git config --global user.email "zonaabissal2016@gmail.com"

git-Ricardo:
	git config --global user.name "Ricardo Maranhão"
	git config --global user.email "cranioscaner@gmail.com"

git-thierry:
	git config --global user.name "ThierryMatheus"
	git config --global user.email "thierrymatheusreal@gmail.com"

git-Vinicius:
	git config --global user.name "augusto.farias"
	git config --global user.email "vinicinho1237@gmail.com"
