<?php

namespace App\Controller;


use App\Entity\Orders;
use App\Entity\Products;
use App\Repository\OrdersRepository;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api")
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/documentation", name="documentation")
     */
    public function index()
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }


    ################################
    ###   PRODUCTS    BEGIN      ###
    ################################
    /**
     * @Route("/products", name="products_api_all", methods={"GET"})
     */
    public function products_all(ProductsRepository $productsRepository)
    {
        return $this->json([
            'products' => $productsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/products/{id}", name="products_api_id", methods={"GET"})
     */
    public function products_show(ProductsRepository $productsRepository, int $id)
    {
        return $this->json([
            'products' => $productsRepository->findBy(['id' => $id]),
        ]);
    }

    /**
     * @Route("/products/create", name="products_api_create", methods={"POST"})
     */
    public function products_create(Request $resquet)
    {
        $data = $resquet->request->all();

        $product = new Products();
        $product->setName($data['name']);
        $product->setDimensions($data['dimensions']);
        $product->setWeight($data['weight']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($product);
        $doctrine->flush();

        return $this->json([
            'data' => 'The product '. $data['name'] .'was created with success.'
        ]);
    }

    /**
     * @Route("/products/{id}", name="products_api_update", methods={"PUT", "PATCH"})
     */
    public function products_update(int $id, Request $resquet)
    {
        $data = $resquet->request->all();

        $product = $this->getDoctrine()->getRepository(Products::class)->find($id);

        $product->setName($data['name']);
        $product->setDimensions($data['dimensions']);
        $product->setWeight($data['weight']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($product);
        $doctrine->flush();

        return $this->json([
            'data' => 'The product '. $data['name'] .'was updated with success.'
        ]);
    }

    ################################
    ###   PRODUCTS    END        ###
    ################################


    ################################
    ###   ORDERS    BEGIN        ###
    ################################
    /**
     * @Route("/orders", name="orders_api_all", methods={"GET"})
     */
    public function orders_all(OrdersRepository $OrdersRepository)
    {
        return $this->json([
            'orders' => $OrdersRepository->findAll(),
        ]);
    }

    /**
     * @Route("/orders/{id}", name="orders_api_id", methods={"GET"})
     */
    public function orders_show(OrdersRepository $OrdersRepository, int $id)
    {
        return $this->json([
            'orders' => $OrdersRepository->findBy(['id' => $id]),
        ]);
    }

    /**
     * @Route("/orders/create", name="orders_api_create", methods={"POST"})
     */
    public function orders_create(Request $resquet)
    {
        $data = $resquet->request->all();

        $orders = new Orders();
        $orders->setCepOrigin($data['cep_origin']);
        $orders->setCepDestiny($data['cep_destiny']);
        $orders->setProducts($data['products']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($orders);
        $doctrine->flush();

        return $this->json([
            'data' => 'The orders was created with success.'
        ]);
    }

    /**
     * @Route("/orders/{id}", name="orders_api_update", methods={"PUT", "PATCH"})
     */
    public function orders_update(int $id, Request $resquet)
    {
        $data = $resquet->request->all();

        $orders = $this->getDoctrine()->getRepository(Orders::class)->find($id);

        $orders->setCepOrigin($data['cep_origin']);
        $orders->setCepDestiny($data['cep_destiny']);
        $orders->setProducts($data['products']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($orders);
        $doctrine->flush();

        return $this->json([
            'data' => 'The orders was updated with success.'
        ]);
    }

    ################################
    ###   ORDERS    END          ###
    ################################

}

