## Requisitos

* PHP 8.2 ou superior
* Composer
* Node.js 20 ou superior
  
## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo .env as credenciais do banco de dados<br>

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js.
```
npm install
```

Gerar a chave no arquivo .env.
```
php artisan key:generate
```

Executar as migration para criar a base de dados e as tabelas.
```
php artisan migrate
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Executar as bibliotecas Node.js.
```
npm run dev
```

Acessar o conteúdo do projeto no navegador.
```
http://127.0.0.1:8000

## Sequencia para criar o projeto
Criar o projeto com laravel
```
composer create-project laravel/laravel .

Iniciar o projeto criado com laravel
```
php artisan serve
```
php artisan make:view nome
```
php artisan make:view courses/show
```

Executar as migrations
```
php artisan migrate
```

Criar Models
```
php artisan make:model NomeDaModel
```
php artisan make:model Course
```

Criar um arquivo de Request com validação
```
php artisan make:request NomeDoRequest
```
php artisan make:request UserRequest
```
Instalar o framework Bootstrap
```
npm i --save bootstrap @popperjs/core
```
npm i --save-dev sass
```
npm run dev
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000