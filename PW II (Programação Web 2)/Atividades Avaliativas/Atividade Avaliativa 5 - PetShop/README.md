# Atividade Avaliativa 5 - PetShop

## Descrição
Sistema web de gerenciamento para um petshop, desenvolvido em PHP com arquitetura de três camadas principais: Users, Pets e Tutores. A aplicação permite cadastro, visualização, edição e exclusão de registros relacionados ao petshop.

## Funcionalidades

### Usuários (Users)
- Listar todos os users cadastrados
- Criar novo user
- Editar dados do user
- Excluir user

### Pets
- Listar todos os pets cadastrados
- Criar novo pet
- Editar dados do pet (inclui atribuição de user_id)
- Excluir pet

### Tutores
- Listar todos os tutores cadastrados
- Criar novo tutor
- Editar dados do tutor
- Excluir tutor

## Tecnologias Utilizadas

- **PHP** - Linguagem de programação
- **PDO** - PHP Data Objects para conexão com banco de dados
- **MySQL** - Banco de dados
- **HTML/CSS** - Interface frontend

## Estrutura do Projeto

```
/Atividade Avaliativa 5 - PetShop/
├── conexao.php          # Configuração da conexão PDO com MySQL
├── index.php            # Página principal com listagens e links
├── script.js            # JavaScript para confirmação de exclusão
├── style.css            # Estilização da interface
├── CREATE/              # Diretórios para cadastro de novos registros
│   ├── Cuser.php
│   ├── Cpet.php
│   └── Ctutor.php
├── READ/                # Arquivos de leitura de dados
│   └── Rbanco.php
├── UPDATE/              # Arquivos de atualização de registros
│   ├── Uuser.php
│   ├── Upet.php
│   └── Ututor.php
├── DELETE/              # Diretórios para exclusão de registros
│   ├── Duser.php
│   ├── Dpet.php
│   └── Dtutor.php
├── img/                 # Imagens e logos
├── pet.sql              # Script SQL para criação das tabelas
└── README.md            # Este arquivo
```

## Requisitos

- Servidor web (Apache/XAMPP/WAMP)
- PHP 7.0 ou superior
- MySQL/MariaDB

## Configuração

1. Iniciar o XAMPP (ou servidor PHP local)
2. Colocar a pasta do projeto na pasta `htdocs`
3. Importar o arquivo `pet.sql` no MySQL
4. Verificar as credenciais em `conexao.php` (padrão XAMPP: user `root`, password `root`)
5. Acessar através do navegador: `http://localhost/Atividade Avaliativa 5 - PetShop/index.php`