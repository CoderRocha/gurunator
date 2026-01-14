# 📚 Gurunator

> **Plataforma de Venda de Cursos Online**

![Gurunator](https://img.shields.io/badge/Gurunator-LMS-5BA32C?style=for-the-badge&logo=php&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.0-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Instalação](#instalação)
- [Como Utilizar](#como-utilizar)
- [Estrutura do Projeto](#-estrutura-do-projeto)

## Sobre o Projeto

O **Gurunator** é uma plataforma completa de gestão e venda de cursos online desenvolvida inteiramente em PHP. A aplicação permite que administradores gerenciem cursos e usuários, enquanto estudantes podem adquirir e acessar cursos utilizando um sistema de créditos integrado.

### Características Principais

- **Sistema de créditos**: Usuários possuem créditos que podem ser utilizados para adquirir cursos

- **Gestão administrativa**: Interface completa para gerenciar cursos, usuários e relatórios

- **Área do estudante**: Loja de cursos, biblioteca pessoal e visualização de conteúdo

- **Relatórios**: Visualização de compras e transações do sistema

## Funcionalidades

### Para Estudantes

- **Loja de Cursos**

  - Visualização de cursos disponíveis
  - Compra de cursos utilizando créditos

- **Meus Cursos**

  - Biblioteca pessoal de cursos adquiridos

  - Acesso ao conteúdo dos cursos

  - Visualização de histórico de compras

- **Sistema de Créditos**

  - Exibição de saldo de créditos disponível

  - Dedução automática ao adquirir cursos

### Para Administradores

- **Gerenciamento de Cursos**

  - Cadastro de novos cursos (título, descrição, conteúdo, preço, imagem)

  - Edição de cursos existentes

  - Exclusão de cursos

  - Upload de imagens (máx. 2MB)

- **Gerenciamento de Usuários**

  - Cadastro de usuários

  - Edição de informações e créditos

  - Exclusão de usuários

  - Controle de permissões (admin/estudante)

- **Relatórios**

  - Visualização de todas as compras realizadas

  - Informações de usuário, curso, data e valor
  
  - Histórico completo de transações

## 🛠 Tecnologias Utilizadas

- **[PHP 7.4+](https://www.php.net/)**

- **[MySQL](https://www.mysql.com/)**

- **[Bootstrap 4](https://getbootstrap.com/)**

- **[jQuery](https://jquery.com/)**

- **[PHPMailer 7.0+](https://github.com/PHPMailer/PHPMailer)**

- **[Themify Icons](https://themify.me/themify-icons)**

- **[Icofont](https://icofont.com/)**

## Instalação

Antes de começar, certifique-se de ter instalado:

- **PHP** 7.4+
- **MySQL** 5.7+
- **Servidor web** (Apache/Nginx)

### Passo a Passo

1. **Clone o repositório**

   ```bash
   git clone https://github.com/coderrocha/gurunator.git
   cd gurunator
   ```

2. **Configure o banco de dados**

   Crie um banco de dados MySQL chamado `gurunator` e execute as queries SQL necessárias para criar as tabelas:

   - `usuarios` (id, nome, email, senha, creditos, admin, data_cadastro)

   - `cursos` (id, titulo, descricao_curta, conteudo, preco, imagem, data_cadastro)

   - `relatorio` (id, id_usuario, id_curso, valor, data_compra)

3. **Instale as dependências**

   ```bash
   composer install
   ```

4. **Configure a conexão com o banco de dados**

   Edite o arquivo `lib/conexao.php` com as suas credenciais do banco de dados:

   ```php
   $host = "localhost";
   $user = "seu_usuario";
   $pass = "sua_senha";
   $db = "gurunator";
   ```

5. **Configure o envio de e-mails (opcional)**

   Edite o arquivo `lib/enviarEmail.php` com suas configurações SMTP

   ```php
   $mail->Host = 'smtp.seu-servidor.com.br';
   $mail->Username = 'seu-email@exemplo.com.br';
   $mail->Password = 'sua-senha-smtp';
   ```

6. **Configure permissões**

   Certifique-se de que a pasta `upload/` tenha permissões de escrita:

   ```bash
   chmod 755 upload/
   ```

7. **Acesse a aplicação**

   Abra o navegador e acesse `http://localhost/gurunator`

## Como Utilizar

### Primeiro Acesso

1. **Criar usuário administrador**

   Insira manualmente no banco de dados um usuário com `admin = 1`.

2. **Fazer login**

   Utilize as credenciais do administrador para acessar o sistema.

3. **Adicionar créditos aos usuários**

   Na área de gerenciamento de usuários, edite os usuários e defina seus créditos iniciais.

### Para Administradores

1. **Cadastrar Cursos**

   - Acesse "Gerenciar Cursos" no menu

   - Clique em "Cadastrar novo curso"

   - Preencha título, descrição, conteúdo, preço e faça upload da imagem

2. **Gerenciar Usuários**

   - Acesse "Gerenciar Usuários"

   - Cadastre novos usuários ou edite existentes

   - Ajuste créditos conforme necessário

3. **Visualizar Relatórios**

   - Acesse "Relatório" para ver o histórico das compras realizadas

### Para Estudantes

1. **Navegar pela Loja**

   - Acesse "Loja Gurunator" no menu

   - Visualize os cursos disponíveis

2. **Adquirir Cursos**

   - Clique em "Adquirir"

   - O sistema verifica se há créditos suficientes

   - Após a compra, os créditos são deduzidos automaticamente e o acesso ao curso é liberado

3. **Acessar Conteúdo**

   - Acesse "Meus Cursos" para ver cursos adquiridos

   - Clique em "Acessar" para visualizar o conteúdo completo

## 📁 Estrutura do Projeto

```
gurunator/
├── assets/                    # Recursos
│   ├── css/                   # Arquivos CSS
│   │   ├── bootstrap/         # Bootstrap CSS
│   │   ├── animate.css/       # Animações CSS
│   │   ├── morris.js/         # Estilos Morris.js
│   │   └── style.css          # Estilos customizados
│   ├── icon/                  # Ícones
│   │   ├── icofont/           # Biblioteca Icofont
│   │   └── themify-icons/     # Biblioteca Themify Icons
│   ├── images/                # Imagens do sistema
│   │   ├── auth/              # Imagens de autenticação
│   │   └── logo.png           # Logo 
│   └── js/                    # Arquivos JavaScript
│       ├── bootstrap/         # Bootstrap JS
│       ├── jquery/            # jQuery
│       ├── morris.js/         # Gráficos
│       └── script.js          # Scripts customizados
├── lib/                       # Bibliotecas
│   ├── conexao.php            # Conexão com o banco de dados
│   ├── protect.php            # Proteção de rotas e autenticação
│   ├── enviarArquivo.php      # Upload de arquivos
│   ├── enviarEmail.php        # Envio de e-mails (PHPMailer)
│   └── generateRandomString.php # Geração de strings aleatórias
├── pages/                     # Páginas da aplicação
│   ├── inicial.php            # Página inicial
│   ├── loja_cursos.php        # Loja de cursos
│   ├── meus_cursos.php        # Cursos adquiridos
│   ├── acessar.php            # Visualização de conteúdo do curso
│   ├── perfil.php             # Perfil do usuário
│   ├── gerenciar_cursos.php   # Gerenciamento de cursos (admin)
│   ├── cadastrar_curso.php    # Cadastro de curso (admin)
│   ├── editar_curso.php       # Edição de curso (admin)
│   ├── deletar_curso.php      # Exclusão de curso (admin)
│   ├── gerenciar_usuarios.php # Gerenciamento de usuários (admin)
│   ├── cadastrar_usuario.php  # Cadastro de usuário (admin)
│   ├── editar_usuario.php     # Edição de usuário (admin)
│   ├── deletar_usuario.php    # Exclusão de usuário (admin)
│   ├── relatorio.php          # Relatórios (admin)
│   └── modelo.php             # Template de página
├── upload/                    # Arquivos enviados
├── composer.json              # Dependências PHP
├── index.php                  # Página principal (router)
├── login.php                  # Página de login
├── logout.php                 # Logout
└── resetar_senha.php          # Recuperação de senha
```

## Autor

**Guilherme Rocha (CoderRocha)**

- GitHub: [CoderRocha](https://github.com/coderrocha)
- LinkedIn: [Guilherme Rocha](https://www.linkedin.com/in/guilherme-rocha-da-silva)

---
