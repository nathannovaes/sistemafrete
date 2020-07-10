<p align="center">
    <img src="public/img/ifrete_main_logo.png" alt="iFrete logo">
</p>

## iFrete

O iFrete é um sistema que consiste em prover para o usuário a possibilidade de criar produtos, acrescentar um produto em um pedido e fazer uma cotação com base no serviço da empresa Correios. As especificações como altura, largura, comprimento e peso, são passadas via requisição e o serviço retorna qual seria o valor SEDEX e PAC para entregar aquele pedido.  


## Sumário

- [Começo rápido](#começo-rápido)
- [Explicando o projeto](#explicando-o-projeto)
- [O que está incluído?](#o-que-está-incluído)
- [Documentação da API](#documentação-da-API)
- [Autor](#autor)

## Pré-requisito
- PHP 7.4^
- A porta 80 precisa estar livre.
- Symfony 5 precisa estar instalado. 
    ```
     wget https://get.symfony.com/cli/installer -O - | bash 
    ```
- Composer 1.10.1
    
## Começo rápido
- [Faça um clone do docker do projeto] (https://github.com/nvitiver/sistemafrete-docker)
    ```
        git clone https://github.com/nvitiver/sistemafrete-docker
    ```
- Acesse a pasta sistemafrete-docker.
    ```
        cd sistemafrete-docker
        cd src
    ```
- [Faça um clone do iFrete]
    ```
        git clone https://github.com/nvitiver/sistemafrete
        cd sistemafrete
        mv * ../
        cd ..
        rm -rf sistemafrete
    ```
  - Rode o composer dentro da pasta src
  ```
    composer install
  ```
  Obs: Não confunda a pasta src do Symfony com a pasta src do docker. Esse projeto todo deve ser clonado dentro da pasta src ao lado da pasta docker.    
- Saia da pasta src e acesse a pasta docker
    ```
        cd ..
        cd docker
    ``` 
- Rode o comando 
    ```
        sudo docker-compose up --build -d
    ``` 

- Abra o seu navegador e escreva: localhost:80

Obs:O MyPhpAdmin está em localhost:8090

## Explicando o projeto

Foi elaborada uma série de vídeos em que o projeto vai sendo explicado em cada etapa. Com esses vídeos um programador iniciante consegue ter os conhecimentos básicos sobre Doctrine, Twig, Comandos do Terminal, MVC, API e etc. E um programador mais experiente pode ter noção de como o projeto foi desenvolvido.  


<a href="https://www.youtube.com/playlist?list=PLnzDO8mVGw5ezafW3cmdE7PreBLhBaOr7" target="_blank">Ver lista de vídeos</a>




## O que está incluído?

Fazendo o download você irá encontrar os seguintes diretórios e arquivos. Agrupados todos por lógica padrão do framework Symfony. Você encontrará algo semelhante a isso: 

```
src
├── bin
├── config
│   ├── packages
│   └── routes
├── migrations
├── public
│   ├── css
│   ├── img
│   └── js
├── src
│   ├── Controller
│   ├── Entity
│   ├── Form
│   ├── Repository
│   └── Services
├── templates
│   ├── api_doc
│   ├── orders
│   ├── products
│   └── quotations
├── var
│   ├── cache
│   └── log
└── vendor
    ├── bin
    ├── composer
    ├── doctrine
    ├── laminas
    ├── nikic
    ├── ocramius
    ├── phpdocumentor
    ├── psr
    ├── sensio
    ├── symfony
    ├── twig
    ├── webimpress
    └── webmozart
```



## Documentação da API

A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.

Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.

Para facilitar o entendimento, funcionamento e documentação da API, foi utilizado o programa Postman. Com ele fica muito mais fácil para o desenvolvedor executar suas requisições e verificar as respostas da API.


[Acessar Documentação](https://documenter.getpostman.com/view/11939856/T17KenFH?version=latest)


## Autor

**Nathan Vitiver**

- <https://github.com/nvitiver>


