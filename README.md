## Requisitos

* PHP 8.2 ou superior
* Composer
* Node.js 20 ou superior

Verique se possui essas dependecias, se não possuir, siga o passo a passo abaixo

## Wamp Server e Composer

Acesse o site oficial do WampServer:
👉 https://www.wampserver.com
Baixe a versão correspondente ao seu sistema operacional (32 bits ou 64 bits).
Execute o instalador e siga as etapas:
Escolha o diretório de instalação (padrão: C:\wamp64).
Escolha o navegador padrão (pode ser Chrome ou Firefox).
Conclua a instalação e reinicie o PC se necessário.

Inicie o WampServer clicando no atalho na área de trabalho.
No ícone da bandeja do sistema, verifique se o ícone do Wamp está verde.
Se estiver vermelho ou laranja, pode haver um problema com portas ocupadas.
Você pode tentar liberar a porta 80 ou 3306 (caso o MySQL não inicie).
Abra o navegador e digite:
👉 http://localhost/
Se a página do Wamp aparecer, significa que ele está rodando corretamente.


Acesse o site oficial do Composer:
👉 https://getcomposer.org/
Baixe o instalador para Windows.
Durante a instalação:
Selecione o PHP do Wamp:
O caminho normalmente é C:\wamp64\bin\php\phpVERSAO\php.exe
Ative a variável de ambiente para poder usar o Composer no terminal.
Conclua a instalação.
  
## Como rodar o projeto baixado/Banco de Dados

Preferivel utilizar o xampp

[text](https://www.apachefriends.org)

Escolha a versão compatível com seu sistema operacional

Clique no botão de Download e aguarde a conclusão do arquivo

Execute o instalador que você baixou (xampp-windows-x64-VERSAO-installer.exe).

Caso apareça um aviso do Controle de Conta do Usuário (UAC), clique em Sim para permitir a instalação.

Na tela de instalação: Clique em Next.

Selecione os componentes desejados. Para desenvolvimento PHP, marque pelo menos:
Apache (Servidor Web)
MySQL (Banco de Dados)
PHP e phpMyAdmin

Clique em Next até chegar à tela de instalação.

Escolha um local para instalar o XAMPP (padrão: C:\xampp) e clique em Next.

Abra o Painel de Controle do XAMPP (XAMPP Control Panel).

Clique no botão Start para iniciar os serviços:

Apache (Servidor Web)

MySQL (Banco de Dados)

Se aparecer um aviso do Firewall do Windows, permita o acesso.

Se tudo estiver certo, as luzes ao lado de "Apache" e "MySQL" ficarão verdes.

Abra o navegador e digite:
👉 http://localhost/
Se a página do XAMPP aparecer, significa que o servidor está funcionando corretamente!

No navegador, acesse:
👉 http://localhost/phpmyadmin/
O phpMyAdmin abrirá, permitindo a criação e gerenciamento de bancos de dados MySQL.
Para criar um banco de dados:
Clique em Novo.
Digite um nome para o banco.
Escolha a collation (UTF8_GENERAL_CI recomendado).
Clique em Criar.

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo .env as credenciais do banco de dados que você criou no xampp <br>

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