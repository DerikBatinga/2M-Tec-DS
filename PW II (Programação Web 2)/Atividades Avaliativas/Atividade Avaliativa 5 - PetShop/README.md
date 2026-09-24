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
## Telas

<img width="1180" height="834" alt="image" src="https://github.com/user-attachments/assets/a654433d-2226-407c-b195-17fda092bfea" />

<img width="493" height="399" alt="image" src="https://github.com/user-attachments/assets/21c0d855-02f1-485f-b0c8-a740702d70b8" />

<img width="319" height="300" alt="image" src="https://github.com/user-attachments/assets/225573ec-af48-49b0-a906-32f23e48f7ab" />

<img width="1077" height="861" alt="image" src="https://github.com/user-attachments/assets/6588b5b3-b834-4183-ab35-ecb269466eeb" />

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
