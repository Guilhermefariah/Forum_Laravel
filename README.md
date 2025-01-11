# Fórum Laravel 10 

![Texto Alternativo](/img/forum.png)  ![Texto Alternativo](/img/laravel.png). 

Este projeto é um fórum desenvolvido utilizando o Framework Laravel 10. Ele utiliza Docker para facilitar o ambiente de desenvolvimento.

## Introdução

Bem-vindo ao Fórum Laravel 10! Este projeto é uma aplicação web que permite aos usuários criar e gerenciar suportes.

## Principais Componentes

* 🧱**DTOs (Data Transfer Objects)**: Utilização de DTOs para estruturar e transferir dados entre camadas, promovendo uma comunicação clara e coesa.
* 📈**Enums**: Implementação de Enums para representar conjuntos fixos de valores, proporcionando consistência e legibilidade ao código.
* 💻**Helpers**: Desenvolvimento de funções utílitarias (Helpers) para simplificar tarefas repetitivas e melhorar a modularidade do código.
* 🎲**Models**: Criação de models para representar entidades no banco de dados, seguindo as práticas de modelagem de dados eficientes.
* 🗃️**Repositories**: Adoção do padrão Repository para isolar a lógica de acesso a dados, facilitando a manutenção e testabilidade do código.
* ⚙️**Services**: Implementação de Services para encapsular a lógica de negócios, promovendo uma separação clara entre as camadas da aplicação.
* 📃**Pagination**: Integração de recursos do Pagination para otimizar a apresentação de grandes conjuntos de dados, garantindo a experiência do usuário mais fluída e eficiente.

## Como Iniciar o Projeto

1. Clone o repositório:
```sh
git clone -b https://github.com/Guilhermefariah/Forum_Laravel laravel-10
```
2. Acesse o diretório do projeto:
```sh
cd laravel-10
```
3. Crie o arquivo `.env`:
```sh
cp .env.example .env
```
4. Atualize as variáveis de ambiente do arquivo `.env`:
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
5. Suba os containers do projeto:
```sh
docker-compose up -d
```
6. Acesse o container app:
```sh
docker-compose exec app bash
```
7. Instale as dependências do projeto:
```sh
composer install
```
8. Gere a key do projeto Laravel:
```sh
php artisan key:generate
```
9. Execute as migrações de banco de dados:
```sh
php artisan migrate
```

## Rotas

* `/`: Rota principal do fórum.
* `/supports`: Rota para criar e gerenciar suportes.
* `/supports/{id}`: Rota para visualizar um suporte específico.
* `/supports/{id}/edit`: Rota para editar um suporte específico.
* `/supports/create`: Rota para criar um novo suporte.
* `/supports/{id}/destroy`: Rota para deletar um suporte específico.

## Contribuição

Este projeto é open-source e qualquer contribuição é bem-vinda. Se você encontrar algum erro ou tiver alguma sugestão, por favor, abra uma issue ou faça um pull request.

## Licença

Este projeto é licenciado sob a licença MIT.