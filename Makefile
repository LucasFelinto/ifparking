## Makefile for Laravel

NAME = laravel
NODE_MODULES_DIR = node_modules

HOST = "0.0.0.0"
PORT = "80"

PHP_PORT = $PORT

DB_HOST = 0.0.0.0
DB_PORT = 3306
DB_DATABASE = main
DB_USERNAME = root
DB_PASSWORD = secret

# Git
	git config --global user.name "Name"
	git config --global user.email "E-mail"

# MYSQL
mysql:
	@docker run \
	    --name mysql-$(NAME) \
	    -p $(DB_PORT):3306 \
	    -e MYSQL_ROOT_PASSWORD=$(DB_PASSWORD) \
	    -e MYSQL_DATABASE=$(DB_DATABASE) \
	    -v $(APP_HOME)/.mysql/conf.d:/etc/mysql/conf.d \
        -v $(APP_HOME)/.mysql/initdb.d:/docker-entrypoint-initdb.d \
        -v $(APP_HOME)/.mysql/data:/var/lib/mysql \
	    -w /var/lib/mysql \
	    -d mysql:latest \

mysql\:stop:
	@docker stop \
	    mysql-$(NAME)

mysql\:start:
	@docker start \
		mysql-$(NAME)

mysql\:build:
	@make mysql

mysql\:run:
	@make mysql\:start \
	&& docker exec -it \
	    mysql-$(NAME) \
	    sh -c 'exec mysql -uroot -p"$(DB_PASSWORD)"'

mysql\:run\:%:
	@make mysql\:start \
	&& docker exec -it \
	    mysql-$(NAME) \
	    sh -c 'exec mysql -uroot -p"$(DB_PASSWORD)" --execute="$(subst mysql:run:,,$@)"'

mysql\:import\:%:
 	@mysql\:start \
	&& docker cp $(subst mysql:import:,,$@) mysql-$(NAME):/var/lib/mysql/dump.sql \
	&& make mysql\:run\:"USE $(DB_DATABASE); SET autocommit=0 ; source dump.sql ; COMMIT ;"

mysql\:%:
	@docker exec -it \
		mysql-$(NAME) sh -c '$(subst mysql:,,$@)'

# PHP
php: ## PHP-Apache server
	@docker run -it \
	    --name php-$(NAME) \
	    --link mysql-$(NAME):mysql \
	    -p $(PORT):80 \
	    -v $(APP_HOME)/:/var/www \
	    -v $(APP_HOME)/public/:/var/www/html \
	    -v $(APP_HOME)/.php:/usr/local/etc/php/ \
	    -v $(APP_HOME)/.cache/:/tmp \
	    -w /var/www/html \
	    -d php:apache

php\:configure:
	@docker exec -it php-$(NAME) \
	    sh -c 'docker-php-source extract \
	        && apt-get update \
	        && apt-get install -y libxml2-dev \
	        && a2enmod rewrite \
	        && docker-php-source delete \
		    && docker-php-ext-install mbstring mysqli pdo pdo_mysql \
		'

php\:start:
	@docker start \
	    php-$(NAME)

php\:stop:
	@docker stop \
	    php-$(NAME)

php\:build:
	@make php php\:configure php\:stop php\:start \

php\:run:
	@make php\:start && docker exec -it \
	    php-$(NAME) \
	    php -a

php\:run\:%: php\:start
	@docker exec -it \
	    php-$(NAME) \
	    $(subst php:run:,,$@)

php\:%:
	@docker exec -it \
		php-$(NAME) sh -c '$(subst php:,,$@)'



# COMPOSER
composer:
	@docker run --rm \
	-v $(APP_HOME):/app \
	    composer/composer \
	    install

# LARAVEL
php\:run:
	php artisan key:generate

php\:build:
	php artisan migrate:fresh --seed
php\:run:
	php artisan servephp artisan serve
# NODE
node:
	@docker run -it \
	    --name node-$(NAME) \
	    -v $(APP_HOME):/usr/src/app \
	    -w /usr/src/app \
	    -d node:4

node\:start:
	@docker start \
		node-$(NAME)

node\:run\:%: node\:start
	@docker exec -it \
	    node-$(NAME) \
	    $(subst node:run:,,$@)

node\:build:
	@make node node\:start \
	&& docker exec -it \
	    node-$(NAME) \
	    npm install --no-bin-links --unsafe-perm

build: ## Build all
	@make mysql\:build php\:build composer node\:build # gulp\:default

start: mysql\:start php\:start


