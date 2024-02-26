
# Fórum Laravel 10

![Texto Alternativo](/img/forum.png) ![Texto Alternativo](/img/laravel.png)

# Introdução! 
Bem-vindo ao Fórum Laravel 10! Este projeto é baseado no Framework Laravel e utiliza Docker
para facilitar o ambiente de desenvolvimento. 

# Principais Componentes

## 🧱 DTOs (Data Transfer Objects)
Utilização de DTOs para estruturar e transferir dados entre camadas, promovendo uma comunicação
clara e coesa.

## 📃 Enumerações (Enum)
Implementação de Enums para representar conjuntos fixos de valores, proporcionando consistência e legibilidade ao código.

## 💻 Helpers 
Desenvolvimento de funções utílitarias (Helpers) para simplificar tarefas repetitivas e melhorar a 
modularidade do código.

## 🎲 Modelos (Models)
Criação de modelos para representar entidades no banco de dados, seguindo as práticas de modelagem de dados eficientes.


 



### Passo a Passo!
Clone Repositório
```sh
git clone -b https://github.com/Guilhermefariah/Forum_Laravel laravel-10
```
```sh
cd laravel-10
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Fórum Laravel 10"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)


Contribuição

Sinta-se à vontade para contribuir contribuir com o desenvolvimento do Fórum Laravel 10. 
problemas (issues) ou envie solicitações de pull (pull requests) para melhorar o projeto.

Licença

Este projeto é licenciado sobre a licença <strong>MIT</strong>.