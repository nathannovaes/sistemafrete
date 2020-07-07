<?php

namespace App\Controller;

use App\Entity\Quotations;
use App\Form\QuotationsType;
use App\Repository\QuotationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/quotations")
 */
class QuotationsController extends AbstractController
{
    /**
     * @Route("/", name="quotations_index", methods={"GET"})
     */
    public function index(QuotationsRepository $quotationsRepository): Response
    {
        return $this->render('quotations/index.html.twig', [
            'quotations' => $quotationsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="quotations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $quotation = new Quotations();
        $form = $this->createForm(QuotationsType::class, $quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($quotation);
            $entityManager->flush();

            return $this->redirectToRoute('quotations_index');
        }

        return $this->render('quotations/new.html.twig', [
            'quotation' => $quotation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="quotations_show", methods={"GET"})
     */
    public function show(Quotations $quotation): Response
    {
        return $this->render('quotations/show.html.twig', [
            'quotation' => $quotation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="quotations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Quotations $quotation): Response
    {
        $form = $this->createForm(QuotationsType::class, $quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quotations_index');
        }

        return $this->render('quotations/edit.html.twig', [
            'quotation' => $quotation,
            'form' => $form->createView(),
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
