<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Quotations;
use App\Form\QuotationsType;
use App\Repository\QuotationsRepository;
use App\Services\CorreiosCalculatePortage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/quotations")
 */
class QuotationsController extends AbstractController
{

    private $calculatePortage;

    function __construct(CorreiosCalculatePortage $calculatePortage)
    {
        $this->calculatePortage = $calculatePortage;
    }


    /**
     * @Route("/correios", name="quotations_correios", methods={"GET"})
     */
    public function correios()
    {
        $resultado = $this->calculatePortage->calculate('17017470','45420000', '04014');
        return $this->json($resultado);
    }

    /**
     * @Route("/", name="quotations_index", methods={"GET"})
     */
    public function index(QuotationsRepository $quotationsRepository): Response
    {

        $page_btn = [
            'page_path' => 'quotations_new',
            'icon_path' => 'img/icons/add.png'
        ];


        return $this->render('quotations/index.html.twig', [
            'quotations'     => $quotationsRepository->findAll(),
            'page_btn'       => $page_btn
        ]);
    }

    /**
     * @Route("/new", name="quotations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $page_btn = [
            'page_path' => 'quotations_index',
            'icon_path' => 'img/icons/back.png'
        ];


        $quotation = new Quotations();
        $form = $this->createForm(QuotationsType::class, $quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $result = $this->calculatePortage->calculate(
                $quotation->getOrders()->getCepOrigin(),
                $quotation->getOrders()->getCepDestiny(),
                $quotation->getOrders()->getProducts()->getWeight(),
                $quotation->getOrders()->getProducts()->getWidth(),
                $quotation->getOrders()->getProducts()->getLength(),
                $quotation->getOrders()->getProducts()->getHeight(),
                $quotation->getServiceCode()
            );

            $quotation->setPortageValue($result[0]);
            $quotation->setDeadline($result[1]);
            $entityManager->persist($quotation);
            $entityManager->flush();

            return $this->redirectToRoute('quotations_index');
        }

        return $this->render('quotations/new.html.twig', [
            'quotation' => $quotation,
            'form' => $form->createView(),
            'page_btn'  => $page_btn
        ]);
    }

    /**
     * @Route("/{id}", name="quotations_show", methods={"GET"})
     */
    public function show(Quotations $quotation): Response
    {
        $page_btn = [
            'page_path' => 'quotations_index',
            'icon_path' => 'img/icons/back.png'
        ];

        $btn_delete = [
            'icon_path' => 'img/icons/delete.png',
            'form'      => 'quotations/_delete_form.html.twig'
        ];

        $btn_edit_quotations = [
            'page_path' => 'quotations_edit',
            'icon_path' => 'img/icons/edit.png',
        ];

        return $this->render('quotations/show.html.twig', [
            'quotation' => $quotation,
            'page_btn'  => $page_btn,
            'btn_delete'           => $btn_delete,
            'btn_edit_quotations'    => $btn_edit_quotations
        ]);
    }

    /**
     * @Route("/{id}/edit", name="quotations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Quotations $quotation): Response
    {

        $page_btn = [
            'page_path' => 'quotations_index',
            'icon_path' => 'img/icons/back.png'
        ];

        $btn_delete = [
            'icon_path' => 'img/icons/delete.png',
            'form'      => 'quotations/_delete_form.html.twig'
        ];

        $form = $this->createForm(QuotationsType::class, $quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager = $this->getDoctrine()->getManager();

            $result = $this->calculatePortage->calculate(
                $quotation->getOrders()->getCepOrigin(),
                $quotation->getOrders()->getCepDestiny(),
                $quotation->getOrders()->getProducts()->getWeight(),
                $quotation->getOrders()->getProducts()->getWidth(),
                $quotation->getOrders()->getProducts()->getLength(),
                $quotation->getOrders()->getProducts()->getHeight(),
                $quotation->getServiceCode()
            );
            $quotation->setPortageValue($result[0]);
            $quotation->setDeadline($result[1]);
            $entityManager->persist($quotation);
            $entityManager->flush();


            return $this->redirectToRoute('quotations_index');
        }


        return $this->render('quotations/edit.html.twig', [
            'quotation' => $quotation,
            'form' => $form->createView(),
            'page_btn'  => $page_btn,
            'btn_delete'  => $btn_delete
        ]);
    }

    /**
     * @Route("/{id}", name="quotations_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Quotations $quotation): Response
    {

        if ($this->isCsrfTokenValid('delete'.$quotation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($quotation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('quotations_index');
    }
}