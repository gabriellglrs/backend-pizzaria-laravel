# API de Pizzaria em Laravel

Esta é uma API RESTful desenvolvida em Laravel para gerenciar uma pizzaria. A aplicação permite o gerenciamento de clientes, funcionários, produtos, pedidos e pagamentos.

## Sobre o Projeto

Este projeto foi criado para fornecer uma API robusta e escalável para um sistema de pizzaria. Ele utiliza o framework Laravel 12 e segue as melhores práticas de desenvolvimento para garantir um código limpo e de fácil manutenção.

## Recursos

*   **Gerenciamento de Clientes:** CRUD completo para clientes.
*   **Gerenciamento de Funcionários:** CRUD completo para funcionários.
*   **Gerenciamento de Categorias:** CRUD completo para categorias de produtos.
*   **Gerenciamento de Produtos:** CRUD completo para produtos.
*   **Gerenciamento de Pedidos:** CRUD completo para pedidos.
*   **Gerenciamento de Itens de Pedido:** CRUD completo para os itens de um pedido.
*   **Gerenciamento de Pagamentos:** CRUD completo para pagamentos.

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes softwares instalados em sua máquina:

*   [PHP](https://www.php.net/downloads.php) (versão 8.2 ou superior)
*   [Composer](https://getcomposer.org/download/)
*   [Node.js](https://nodejs.org/en/download/) (e npm)
*   [Git](https://git-scm.com/downloads)

## Instalação

1.  **Clone o repositório:**

    ```bash
    git clone https://github.com/gabriellglrs/backend-pizzaria-laravel.git
    cd backend-pizzaria-laravel
    ```

2.  **Instale as dependências do PHP:**

    ```bash
    composer install
    ```

3.  **Instale as dependências do Node.js:**

    ```bash
    npm install
    ```

4.  **Configure o arquivo de ambiente:**

    Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, como a conexão com o banco de dados.

    ```bash
    cp .env.example .env
    ```

5.  **Gere a chave da aplicação:**

    ```bash
    php artisan key:generate
    ```

6.  **Execute as migrações do banco de dados:**

    ```bash
    php artisan migrate
    ```

7.  **Inicie o servidor de desenvolvimento:**

    ```bash
    php artisan serve
    ```

## Endpoints da API

A seguir estão os endpoints da API disponíveis:

### Clientes

*   `GET /api/clientes`: Lista todos os clientes.
*   `GET /api/clientes/{id}`: Obtém um cliente específico.
*   `POST /api/clientes`: Cria um novo cliente.
*   `PUT /api/clientes/{id}`: Atualiza um cliente existente.
*   `DELETE /api/clientes/{id}`: Exclui um cliente.

### Funcionários

*   `GET /api/funcionarios`: Lista todos os funcionários.
*   `GET /api/funcionarios/{id}`: Obtém um funcionário específico.
*   `POST /api/funcionarios`: Cria um novo funcionário.
*   `PUT /api/funcionarios/{id}`: Atualiza um funcionário existente.
*   `DELETE /api/funcionarios/{id}`: Exclui um funcionário.

### Categorias

*   `GET /api/categorias`: Lista todas as categorias.
*   `GET /api/categorias/{id}`: Obtém uma categoria específica.
*   `POST /api/categorias`: Cria uma nova categoria.
*   `PUT /api/categorias/{id}`: Atualiza uma categoria existente.
*   `DELETE /api/categorias/{id}`: Exclui uma categoria.

### Produtos

*   `GET /api/produtos`: Lista todos os produtos.
*   `GET /api/produtos/{id}`: Obtém um produto específico.
*   `POST /api/produtos`: Cria um novo produto.
*   `PUT /api/produtos/{id}`: Atualiza um produto existente.
*   `DELETE /api/produtos/{id}`: Exclui um produto.

### Pedidos

*   `GET /api/pedidos`: Lista todos os pedidos.
*   `GET /api/pedidos/{id}`: Obtém um pedido específico.
*   `POST /api/pedidos`: Cria um novo pedido.
*   `PUT /api/pedidos/{id}`: Atualiza um pedido existente.
*   `DELETE /api/pedidos/{id}`: Exclui um pedido.

### Itens de Pedido

*   `GET /api/itens-pedido`: Lista todos os itens de pedido.
*   `GET /api/itens-pedido/{id}`: Obtém um item de pedido específico.
*   `POST /api/itens-pedido`: Cria um novo item de pedido.
*   `PUT /api/itens-pedido/{id}`: Atualiza um item de pedido existente.
*   `DELETE /api/itens-pedido/{id}`: Exclui um item de pedido.

### Pagamentos

*   `GET /api/pagamentos`: Lista todos os pagamentos.
*   `GET /api/pagamentos/{id}`: Obtém um pagamento específico.
*   `POST /api/pagamentos`: Cria um novo pagamento.
*   `PUT /api/pagamentos/{id}`: Atualiza um pagamento existente.
*   `DELETE /api/pagamentos/{id}`: Exclui um pagamento.