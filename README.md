## IFParking
## Sistema de Controle de acesso ao estacionamento do novo Campus Igarassu.
-- Registre a entrada e saída do seu veículos(carro, moto e bicicleta), de forma extremamente ágil e móvel, tendo sempre dados de ocupação e permanência.




![](https://media.discordapp.net/attachments/717549337198067813/756188028837429348/ifparking.png?width=827&height=430)

## Requisitos Técnicos

- PHP >= 7.0.0
- Laravel >= 8.0.0
- Banco de Dados >= SQL

## Instalação do Sistema

```sh
git clone https://github.com/LucasFelinto/ifparking 
```

```sh
cd ifparking
```

```sh
composer install
```

```sh
php artisan migrate
```

```sh
php artisan serve
```

## Funcionalidades do Estacionamento
- Permitir ao usuário realizar um cadastro seguro no sistema.
- O usuário poderá fazer o check-in de uma vaga de acordo com a sua necessidade e meio de transporte.
- O administrador do sistema vai definir quantas vagas serão disponibilizadas para os alunos, servidores e professores, que também será de acordo com o tipo de transporte, carro, moto ou bicicleta.
