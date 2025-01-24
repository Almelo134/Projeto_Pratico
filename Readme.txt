# Projeto de Cadastro

Este é um projeto de cadastro simples feito com HTML, CSS, JavaScript e PHP. 
O formulário de cadastro coleta o nome, email, senha e confirmação de senha do usuário e valida esses dados antes de enviá-los ao servidor. 
Se os dados forem válidos, eles são exibidos na tela.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS
- **Backend**: PHP, JavaScript

## Funcionalidades

- **Validação de Formulário**: 
  - Verifica se o nome não está vazio.
  - Valida se o e-mail tem um formato correto.
  - Confirma que a senha atende aos critérios de segurança (mínimo de 5 caracteres, com pelo menos uma letra maiúscula, uma letra minúscula e um número).
  - Assegura que a senha e a confirmação da senha são iguais.
- **Feedback de Erro**: Se algum campo estiver incorreto, o usuário será alertado com uma mensagem de erro.
- **Exibição dos Dados**: Após a validação bem-sucedida, os dados do cadastro são exibidos em uma página de confirmação.


## Pré-requisitos

Antes de rodar o projeto, você precisa ter o seguinte instalado em sua máquina:

- **PHP** (Para rodar o backend)
- **Servidor Web** (Apache, Nginx, etc.) Utilizei o Xampp (OS ARQUIVOS SE LOCALIZAM EM "C:\xampp\htdocs\Formulario". PARA QUE NÃO OCORRAM PROBLEMAS SERIA IDEAL COLOCAR NA MESMA PASTA)
- **Um navegador** para acessar a aplicação (UTILIZADO OPERA GX )

### Como Configurar o Ambiente PHP

Para executar o projeto localmente, siga os passos abaixo:

### 1. Instalar o PHP

Se você ainda não tem o PHP instalado, siga os passos abaixo de acordo com o seu sistema operacional:

#### Windows

1. Baixe o PHP em [https://windows.php.net/download](https://windows.php.net/download).
2. Extraia o conteúdo do arquivo compactado para um diretório de sua escolha (por exemplo, `C:\php`).
3. Adicione o diretório do PHP ao PATH do sistema:
   - Abra o menu "Iniciar" e pesquise por "Variáveis de ambiente".
   - Na seção "Variáveis do sistema", clique em "Path" e depois "Editar".
   - Adicione o caminho do diretório PHP, por exemplo, `C:\php`.
   - Aperte em "Ok"
4. Para testar se o PHP foi instalado corretamente, abra o Prompt de Comando e digite: php -v (Em alguns casos pode ser necessário reiniciar o computador)