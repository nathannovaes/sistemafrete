<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/api/documentation", name="api_doc")
 */
class ApiDocController extends AbstractController
{
    /**
     * @Route("/", name="visao_geral")
     */
    public function index()
    {

        $title  = 'Visão Geral';

        $image = 'img/ifrete_api_logo.png';

        $contents = [
          'A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.',
          'Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.',
        ];

        return $this->render('api_doc/index.html.twig', [
            'title'      => $title,
            'contents'   => $contents,
            'image'      => $image
        ]);
    }

    /**
     * @Route("/products/all", name="products_all")
     */
    public function product_all()
    {

        $title  = 'Products - Consulta geral';
        $method = [
            'class'     => 'badge-success',
            'action'    => 'GET'
        ];

        $contents = [
            'A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.',
            'Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.',
        ];

        return $this->render('api_doc/index.html.twig', [
            'title'      => $title,
            'method'     => $method,
            'contents'   => $contents
        ]);
    }

    /**
     * @Route("/products/one", name="products_one")
     */
    public function product_one()
    {

        $title  = 'Products - Consulta única';
        $method = [
            'class'     => 'badge-success',
            'action'    => 'GET'
        ];

        $contents = [
            'A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.',
            'Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.',
        ];

        return $this->render('api_doc/index.html.twig', [
            'title'      => $title,
            'method'     => $method,
            'contents'   => $contents
        ]);
    }

    /**
     * @Route("/products/create", name="products_create")
     */
    public function product_create()
    {

        $title  = 'Products - Criar';
        $method = [
            'class'     => 'badge-warning',
            'action'    => 'POST'
        ];

        $contents = [
            'A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.',
            'Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.',
        ];

        return $this->render('api_doc/index.html.twig', [
            'title'      => $title,
            'method'     => $method,
            'contents'   => $contents
        ]);
    }

    /**
     * @Route("/products/update", name="products_update")
     */
    public function product_update()
    {

        $title  = 'Products - Atualizar';
        $method = [
            'class'     => 'badge-primary',
            'action'    => 'PUT'
        ];

        $contents = [
            'A API do iFrete permite a criação, atualização e consulta de todas as entidades que o sistema contém. A lista ao lado mostra as três entidades que o sistema possui e seus respectivos métodos.',
            'Esse guia serve de referência sobre como usar a API e como executar as suas operações. A documentação foi organizada por entidade, onde existe um exemplo de como utilizar a requisição, acompanhado de um breve vídeo explicativo. Os recursos representados aqui foram feitos como objetos JSON.',
        ];

        return $this->render('api_doc/index.html.twig', [
            'title'      => $title,
            'method'     => $method,
            'contents'   => $contents
        ]);
    }
}
