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
          'Para facilitar o entendimento, funcionamento  e documentação da API, foi utilizado o programa Postman. Com ele fica muito mais fácil para o desenvolvedor executar suas requisições e verificar as respostas da API.'


        ];

        return $this->render('api_doc/index.html.twig', [
            'title'      => $title,
            'contents'   => $contents,
            'image'      => $image
        ]);
    }


}
