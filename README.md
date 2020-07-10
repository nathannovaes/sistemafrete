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

Several quick start options are available:

- [Download the latest release](https://github.com/twbs/bootstrap/archive/v5.0.0.zip)
- Clone the repo: `git clone https://github.com/twbs/bootstrap.git`
- Install with [npm](https://www.npmjs.com/): `npm install bootstrap@next`
- Install with [yarn](https://yarnpkg.com/): `yarn add bootstrap@next`
- Install with [Composer](https://getcomposer.org/): `composer require twbs/bootstrap:5.0.0`
- Install with [NuGet](https://www.nuget.org/): CSS: `Install-Package bootstrap` Sass: `Install-Package bootstrap.sass`

Read the [Getting started page](https://v5.getbootstrap.com/docs/5.0/getting-started/introduction/) for information on the framework contents, templates and examples, and more.



## O que está incluído?

Fazendo o download você irá encontrar os seguintes diretórios e arquivos. Agrupados todos por lógica padrão do framework Symfony. Você encontrará algo semelhante a isso: 

```text
bootstrap/
└── dist/
    ├── css/
    │   ├── bootstrap-grid.css
    │   ├── bootstrap-grid.css.map
    │   ├── bootstrap-grid.min.css
    │   ├── bootstrap-grid.min.css.map
    │   ├── bootstrap-reboot.css
    │   ├── bootstrap-reboot.css.map
    │   ├── bootstrap-reboot.min.css
    │   ├── bootstrap-reboot.min.css.map
    │   ├── bootstrap-utilities.css
    │   ├── bootstrap-utilities.css.map
    │   ├── bootstrap-utilities.min.css
    │   ├── bootstrap-utilities.min.css.map
    │   ├── bootstrap.css
    │   ├── bootstrap.css.map
    │   ├── bootstrap.min.css
    │   └── bootstrap.min.css.map
    └── js/
        ├── bootstrap.bundle.js
        ├── bootstrap.bundle.js.map
        ├── bootstrap.bundle.min.js
        ├── bootstrap.bundle.min.js.map
        ├── bootstrap.esm.js
        ├── bootstrap.esm.js.map
        ├── bootstrap.esm.min.js
        ├── bootstrap.esm.min.js.map
        ├── bootstrap.js
        ├── bootstrap.js.map
        ├── bootstrap.min.js
        └── bootstrap.min.js.map
```



## Documentação da API

A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.

Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.

Para facilitar o entendimento, funcionamento e documentação da API, foi utilizado o programa Postman. Com ele fica muito mais fácil para o desenvolvedor executar suas requisições e verificar as respostas da API.


[Acessar Documentação](https://documenter.getpostman.com/view/11939856/T17KenFH?version=latest).

### Rodando o projeto localmente

1. Run `npm install` to install the Node.js dependencies, including Hugo (the site builder).
2. Run `npm run test` (or a specific npm script) to rebuild distributed CSS and JavaScript files, as well as our docs assets.
3. From the root `/bootstrap` directory, run `npm run docs-serve` in the command line.
4. Open `http://localhost:9001/` in your browser, and voilà.

Learn more about using Hugo by reading its [documentation](https://gohugo.io/documentation/).


## Autor

**Nathan Vitiver**

- <https://github.com/nvitiver>



## Copyright and license

Docs released under [Creative Commons](https://creativecommons.org/licenses/by/3.0/).
