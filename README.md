# 👩🏻‍💻Technological Solar Energy (TSE)

## 📚Descrição

O **Technological Solar Energy (TSE)** é uma plataforma web voltada para a gestão e automação do pagamento em postos de carregamento para veículos elétricos movidos a energia solar.

O sistema oferece uma experiência totalmente automatizada para o usuário, permitindo o cadastro, autenticação, seleção de planos de carregamento, geração de QR codes para pagamento e controle em tempo real do status do carregamento.

---

## 🖼️Funcionalidades Principais

- Cadastro e autenticação de usuários.
- Visualização e seleção de planos de carregamento com diferentes tempos e valores.
- Geração automática de QR codes com o valor correspondente ao plano escolhido para pagamento.
- Sistema de pagamento integrado que confirma automaticamente o recebimento.
- Liberação do carregamento após confirmação do pagamento.
- Monitoramento em tempo real do status do carregamento pela interface web.
- Gestão de saldo dos usuários e histórico de transações.
- Interface responsiva e amigável desenvolvida com HTML, CSS e JavaScript.
- Backend em PHP com banco de dados MySQL para gerenciamento dos dados.

---

## 🛠️Tecnologias Utilizadas

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Banco de Dados:** MySQL
- **Outros:** Biblioteca para geração de QR code no backend

---

## 📁Estrutura do Projeto

---

## ⚙️Como Usar

### 📍Requisitos

- Servidor web com suporte a PHP (ex: Apache, Nginx)
- Banco de dados MySQL
- Navegador para acessar a aplicação web

### 📋Passos para rodar localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/ninabrambilla/tse.git
   
2.	Importe o banco de dados MySQL utilizando o arquivo tse.sql disponível na raiz do projeto:
- Acesse seu gerenciador de banco de dados (ex: phpMyAdmin ou MySQL Workbench)
- Crie um novo banco com o nome desejado (ex: tse)
- Importe o arquivo tse.sql localizado na raiz do repositório
3.	Configure as credenciais do banco de dados no arquivo de configuração PHP (conexao.php).
4.	Configure seu servidor web para apontar para a raiz do projeto, onde está localizado o arquivo index.html.
5.	Acesse o site pelo navegador para realizar o cadastro, selecionar planos e testar a geração do QR code e confirmação de pagamento.