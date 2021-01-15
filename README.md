<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## AGENDA DE CONTATOS (NETSHOW.ME)

## Sobre o Projeto 

Esse projeto foi realizado especialmente para a oportunidade de desenvolvedor PHP para a  empresa Netshow.me. Trata-se de uma agenda de contatos onde o usuário tem acesso a um ambiente web, com apresentação da empresa e um formulário para  os seus dados e um arquivo (como por exemplo um currículum). Esses dados são enviados automaticamente para um e-mail gerido pelo administrador do projeto.

Detalhes do Projeto:

- Projeto desenvolvido em PHP 7.2, utilizando o framework Laravel 8 no back end.
- Foi escrito utilizando o editor de texto Visual Studio Code (versão 1.52.1) no ambiente Windows 10
 com total compatibilidade com sistemas Linux.
- As dependências do projeto é gerida pelo Composer.
- A estilização da maior parte do front end foi através da montagem de estruturas 
com base em artigos disponibilizados na internet.
- O Front End utiliza o framework bootstrap 4 (JS/CSS3) e páginas em HTML5.
- As imagens como logo da empresa foi retirado do próprio site da netshow.me.
- As demais imagens são gratuitas e foram retiradas do site freepik.com.
- Projeto pré configurado para utilização futura de Node.js.
- Criação de um e-mail personalizado para o projeto (usando o gmail.com).
- Contempla testes automatizados com PHPUnit;
- Contempla uma migration principal;
- Contempla banco de dados relacional utilizando o Mysql.
- Projeto desenvolvido em Janeiro de 2021.
- Projeto contempla versionamento com o git.

## Sobre a Empresa 

- Temos como missão ajudar empresas e organizações a construírem e sustentarem negócios por meio de tecnologias de vídeos online e transmissões ao vivo. Nos consolidamos como referência do setor e já recebemos diversos prêmios nacionais e internacionais pela nossa cultura de inovação, atendendo clientes de diversos portes e mercados como Oracle, Santander, XP Investimentos, B3 e centenas de outros.

[Netshow.me](https://netshow.me)

## Início Rápido do Projeto

- Configure o seu ambiente com o PHP 7.2, Mysql, Apache, git, composer e um editor da sua preferência (Linux/Windows).
- Crie um banco de dados com codificação utf-8 e com o nome de 'agenda'.
- Faça o clone desse projeto com o git, dentro de /agenda, utilizando o comando: git clone https://github.com/joseguilhermeromano/agenda-nsm.git
- Para acessar o e-mail criado para testes no projeto utilize as credenciais de acesso:
    E-mail: agenda.netshowsme@gmail.com Senha: @g3nd@&NSM
- Crie um arquivo na raiz do projeto (agenda) e  nomeie como .env.
- Nesse arquivo deve ter as seguintes configurações de acordo com sua máquina: 

Primeiro, coloque as configurações básicas do projeto, como nome da aplicação, variavel de ambiente (ex:local), 
a chave de segurança que será utilizada nos formulários com CSRF, URL da aplicação (no meu caso agenda.local é uma configuração
personalizada, usando virtualhost do Apache):

APP_NAME=agenda
APP_ENV=local
APP_KEY=base64:rRK7Uc5Dp0la3hVJu9K6NAuGgmDF2f9j+G1sEk5+hvw=
APP_DEBUG=true
APP_URL=http://agenda.local

Configurações de banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=agenda
DB_USERNAME=root
DB_PASSWORD=

E por fim as configurações do servidor de e-mail:

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=agenda.netshowsme@gmail.com
MAIL_PASSWORD=@g3nd@&NSM
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=agenda.netshowsme@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

Lembrando que se for um e-mail configurado por você, certifique-se que no gmail (ou seu fornecedor de e-mails) 
esteja com as configurações de smtp liberadas para dispositivos menos seguros, para que seja possível 
realizar os envios dos e-mails.

Observação: todas as informações são meramente fictícias e por isso estão exibidas aqui. Em cenários reais
não é recomendado a disponibilização do arquivo .env no repositório e muito menos informações
que comprometam a segurança da aplicação.

- Finalizando a etapa de configuração do arquivo .env, 
salve o arquivo e execute o seguinte comando para aplicar as mudanças: 

php artisan config:cache

- Agora é hora de rodar as migrations com o comando:

php artisan migrate

- A configuração está pronta, divirta-se!!!

## Conclusão

Sou muito grato de poder participar dessa oportunidade, foi muito divertido e aprimorei muitos conhecimentos!
Espero que gostem do resultado!!
Deus te abençoe!!

## Licença 

O Framework Laravel é um software de código aberto, licenciado por [MIT license](https://opensource.org/licenses/MIT).
