<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=4C89F8&height=120&section=header"/>

<img width="1584" height="396" alt="LinkedIn cover - 29" src="https://github.com/user-attachments/assets/d1c05723-0bec-4ce7-8dee-1ef8c95ebf3e" />



# Sistema de Gerenciamento de Pedidos

## Descrição

Sistema completo de gerenciamento de pedidos desenvolvido em Laravel, permitindo controle total sobre clientes, funcionários, produtos, categorias, pedidos e pagamentos. O sistema oferece uma API RESTful completa para integração com aplicações front-end.

## Funcionalidades

- **Gestão de Clientes**: Cadastro, edição e remoção de clientes
- **Gestão de Funcionários**: Controle de funcionários e seus cargos
- **Gestão de Categorias**: Organização de produtos por categorias
- **Gestão de Produtos**: Controle de estoque e disponibilidade
- **Gestão de Pedidos**: Criação e acompanhamento de pedidos
- **Gestão de Pagamentos**: Controle de formas de pagamento e status
- **API RESTful**: Endpoints completos para todas as entidades

## Tecnologias Utilizadas

- **Laravel**: Framework PHP
- **MySQL**: Banco de dados relacional
- **Eloquent ORM**: Mapeamento objeto-relacional
- **API Resources**: Transformação de dados para API
- **Migrations**: Controle de versão do banco de dados

## Estrutura do Banco de Dados

### Tabelas Principais

1. **clientes**: Dados dos clientes
2. **funcionarios**: Dados dos funcionários
3. **categorias**: Categorias de produtos
4. **produtos**: Produtos disponíveis
5. **pedidos**: Pedidos realizados
6. **itens_pedido**: Itens de cada pedido
7. **pagamentos**: Informações de pagamento

### Relacionamentos

- Cliente → Pedidos (1:N)
- Funcionário → Pedidos (1:N)
- Categoria → Produtos (1:N)
- Produto → Itens Pedido (1:N)
- Pedido → Itens Pedido (1:N)
- Pedido → Pagamento (1:1)

## Instalação

### Pré-requisitos

- PHP 8.1+
- Composer
- MySQL 8.0+
- Node.js (opcional, para assets)

### Passos para Instalação

1. Clone o repositório:
```bash
git clone <url-do-repositorio>
cd sistema-pedidos
```

2. Instale as dependências:
```bash
composer install
```

3. Configure o arquivo `.env`:
```bash
cp .env.example .env
```

4. Configure as variáveis de ambiente no `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistema_pedidos
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

5. Gere a chave da aplicação:
```bash
php artisan key:generate
```

6. Execute as migrações:
```bash
php artisan migrate
```

7. Inicie o servidor:
```bash
php artisan serve
```

## Endpoints da API

### Clientes

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/clientes` | Lista todos os clientes |
| GET | `/clientes/{id}` | Exibe um cliente específico |
| POST | `/clientes` | Cria um novo cliente |
| PUT | `/clientes/{id}` | Atualiza um cliente |
| DELETE | `/clientes/{id}` | Remove um cliente |

#### Exemplo de Requisição - Criar Cliente
```json
POST /clientes
{
    "nome": "João Silva",
    "email": "joao@exemplo.com",
    "telefone": "(11) 99999-9999",
    "endereco": "Rua das Flores, 123"
}
```

### Funcionários

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/funcionarios` | Lista todos os funcionários |
| GET | `/funcionarios/{id}` | Exibe um funcionário específico |
| POST | `/funcionarios` | Cria um novo funcionário |
| PUT | `/funcionarios/{id}` | Atualiza um funcionário |
| DELETE | `/funcionarios/{id}` | Remove um funcionário |

#### Exemplo de Requisição - Criar Funcionário
```json
POST /funcionarios
{
    "nome": "Maria Santos",
    "cargo": "Vendedora",
    "email": "maria@empresa.com",
    "senha": "senha123"
}
```

### Categorias

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/categorias` | Lista todas as categorias |
| GET | `/categorias/{id}` | Exibe uma categoria específica |
| POST | `/categorias` | Cria uma nova categoria |
| PUT | `/categorias/{id}` | Atualiza uma categoria |
| DELETE | `/categorias/{id}` | Remove uma categoria |

#### Exemplo de Requisição - Criar Categoria
```json
POST /categorias
{
    "nome": "Eletrônicos",
    "descricao": "Produtos eletrônicos em geral"
}
```

### Produtos

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/produtos` | Lista todos os produtos |
| GET | `/produtos/{id}` | Exibe um produto específico |
| POST | `/produtos` | Cria um novo produto |
| PUT | `/produtos/{id}` | Atualiza um produto |
| DELETE | `/produtos/{id}` | Remove um produto |

#### Exemplo de Requisição - Criar Produto
```json
POST /produtos
{
    "nome": "Smartphone X",
    "descricao": "Smartphone com tela de 6.5 polegadas",
    "preco": 899.99,
    "categoria_id": 1,
    "disponivel": true
}
```

### Pedidos

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/pedidos` | Lista todos os pedidos |
| GET | `/pedidos/{id}` | Exibe um pedido específico |
| POST | `/pedidos` | Cria um novo pedido |
| PUT | `/pedidos/{id}` | Atualiza um pedido |
| DELETE | `/pedidos/{id}` | Remove um pedido |

#### Exemplo de Requisição - Criar Pedido
```json
POST /pedidos
{
    "cliente_id": 1,
    "funcionario_id": 1,
    "data_pedido": "2025-07-14 10:30:00",
    "status": "Pendente",
    "valor_total": 1299.98
}
```

### Itens do Pedido

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/itens-pedido` | Lista todos os itens |
| GET | `/itens-pedido/{id}` | Exibe um item específico |
| POST | `/itens-pedido` | Cria um novo item |
| PUT | `/itens-pedido/{id}` | Atualiza um item |
| DELETE | `/itens-pedido/{id}` | Remove um item |

#### Exemplo de Requisição - Criar Item do Pedido
```json
POST /itens-pedido
{
    "pedido_id": 1,
    "produto_id": 1,
    "quantidade": 2,
    "preco_unitario": 899.99
}
```

### Pagamentos

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/pagamentos` | Lista todos os pagamentos |
| GET | `/pagamentos/{id}` | Exibe um pagamento específico |
| POST | `/pagamentos` | Cria um novo pagamento |
| PUT | `/pagamentos/{id}` | Atualiza um pagamento |
| DELETE | `/pagamentos/{id}` | Remove um pagamento |

#### Exemplo de Requisição - Criar Pagamento
```json
POST /pagamentos
{
    "pedido_id": 1,
    "forma_pagamento": "Cartão de Crédito",
    "valor": 1299.98,
    "status": "Aprovado"
}
```

## Estrutura de Resposta

Todas as respostas da API seguem o padrão dos Resources do Laravel:

```json
{
    "data": {
        "id": 1,
        "nome": "João Silva",
        "email": "joao@exemplo.com",
        "telefone": "(11) 99999-9999",
        "endereco": "Rua das Flores, 123",
        "created_at": "2025-07-14T10:30:00.000000Z",
        "updated_at": "2025-07-14T10:30:00.000000Z"
    }
}
```

## Validações

### Cliente
- `nome`: obrigatório, string, máximo 255 caracteres
- `email`: obrigatório, formato email, único
- `telefone`: obrigatório, string, máximo 20 caracteres
- `endereco`: obrigatório, string, máximo 255 caracteres

### Funcionário
- `nome`: obrigatório, string, máximo 255 caracteres
- `cargo`: obrigatório, string, máximo 255 caracteres
- `email`: obrigatório, formato email, único
- `senha`: obrigatório, string, mínimo 6 caracteres

### Categoria
- `nome`: obrigatório, string, máximo 255 caracteres
- `descricao`: opcional, string

### Produto
- `nome`: obrigatório, string, máximo 255 caracteres
- `descricao`: opcional, string
- `preco`: obrigatório, numérico, mínimo 0
- `categoria_id`: obrigatório, deve existir na tabela categorias
- `disponivel`: obrigatório, boolean

### Pedido
- `cliente_id`: obrigatório, deve existir na tabela clientes
- `funcionario_id`: opcional, deve existir na tabela funcionários
- `data_pedido`: obrigatório, formato data
- `status`: obrigatório, string, máximo 255 caracteres
- `valor_total`: obrigatório, numérico, mínimo 0

### Item do Pedido
- `pedido_id`: obrigatório, deve existir na tabela pedidos
- `produto_id`: obrigatório, deve existir na tabela produtos
- `quantidade`: obrigatório, inteiro, mínimo 1
- `preco_unitario`: obrigatório, numérico, mínimo 0

### Pagamento
- `pedido_id`: obrigatório, deve existir na tabela pedidos
- `forma_pagamento`: obrigatório, string, máximo 255 caracteres
- `valor`: obrigatório, numérico, mínimo 0
- `status`: obrigatório, string, máximo 255 caracteres

## Segurança

### Recomendações Importantes

1. **Hash de Senhas**: Descomente a linha no `FuncionarioController` para usar hash nas senhas:
```php
$data['senha'] = bcrypt($data['senha']);
```

2. **Autenticação**: Implemente autenticação usando Laravel Sanctum ou Passport

3. **Autorização**: Adicione middleware para controle de acesso

4. **Validação de Entrada**: Todas as validações estão implementadas nos controllers

## Desenvolvimento

### Comandos Úteis

```bash
# Executar migrações
php artisan migrate

# Reverter migrações
php artisan migrate:rollback

# Limpar cache
php artisan cache:clear

# Gerar nova migration
php artisan make:migration create_nome_table

# Gerar novo model
php artisan make:model NomeModel

# Gerar novo controller
php artisan make:controller NomeController
```

### Estrutura de Arquivos

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── CategoriaController.php
│   │   ├── ClienteController.php
│   │   ├── FuncionarioController.php
│   │   ├── ItemPedidoController.php
│   │   ├── PagamentoController.php
│   │   ├── PedidoController.php
│   │   └── ProdutoController.php
│   └── Resources/
│       ├── CategoriaResource.php
│       ├── ClienteResource.php
│       ├── FuncionarioResource.php
│       ├── ItemPedidoResource.php
│       ├── PagamentoResource.php
│       ├── PedidoResource.php
│       └── ProdutoResource.php
├── Models/
│   ├── Categoria.php
│   ├── Cliente.php
│   ├── Funcionario.php
│   ├── ItemPedido.php
│   ├── Pagamento.php
│   ├── Pedido.php
│   └── Produto.php
database/
└── migrations/
    ├── 2025_07_13_014840_create_clientes_table.php
    ├── 2025_07_13_014856_create_funcionarios_table.php
    ├── 2025_07_13_014925_create_categorias_table.php
    ├── 2025_07_13_014930_create_produtos_table.php
    ├── 2025_07_13_014938_create_pedidos_table.php
    ├── 2025_07_13_014956_create_itens_pedido_table.php
    └── 2025_07_13_015019_create_pagamentos_table.php
```

## Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/nova-feature`)
5. Abra um Pull Request

## Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## Suporte

Para dúvidas ou problemas, abra uma issue no repositório do projeto.

---

**Versão**: 1.0.0  
**Última Atualização**: 14 de julho de 2025

 <br>

 <br>
<div align="center">
  <img src="https://github.com/user-attachments/assets/ed7208b8-6bdc-4c82-98aa-8c8cb9c1428f" height="150"/>
</div>

<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=4C89F8&height=120&section=footer"/>
