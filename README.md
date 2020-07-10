<p align="center">
    <img src="public/img/ifrete_main_logo.png" alt="iFrete logo">
</p>

## iFrete

O iFrete é um sistema que consiste em prover para o usuário a possibilidade de criar produtos, acrescentar um produto em um pedido e fazer uma cotação com base no serviço da empresa Correios. As especificações como altura, largura, comprimento e peso, são passadas via requisição e o serviço retorna qual seria o valor SEDEX e PAC para entregar aquele pedido.  


## Sumário

- [Começo rápido](#começo-rapido)
- [O que está incluído?](#o-que-esta-incluído)
- [Documentação da API](#documentacao-da-api)
- [Autor](#autor)
- [Copyright and license](#copyright-and-license)


## Começo rápido
- [Baixe o docker do projeto] (https://github.com/)
- Coloque o projeto dentro do diretório sistemafrete-docker.
- Acesse a pasta docker
- Rode o comando 
```
    sudo docker-compose up --build -d
``` 
- Acesse o seu localhost
- MyPhpAdmin está em localhost:8090

## O que está incluído?

Fazendo o download você irá encontrar os seguintes diretórios e arquivos. Agrupados todos por lógica padrão do framework Symfony. Você encontrará algo semelhante a isso: 

```
.
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



## Copyright

Docs released under [Creative Commons](https://creativecommons.org/licenses/by/3.0/).
