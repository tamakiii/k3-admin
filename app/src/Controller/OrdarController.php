<?php

namespace App\Controller;

use App\Entity\Ordar;
use App\Form\OrdarType;
use App\Repository\OrdarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ordar")
 */
class OrdarController extends AbstractController
{
    /**
     * @Route("/", name="ordar_index", methods={"GET"})
     */
    public function index(OrdarRepository $ordarRepository): Response
    {
        return $this->render('ordar/index.html.twig', [
            'ordars' => $ordarRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ordar_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ordar = new Ordar();
        $form = $this->createForm(OrdarType::class, $ordar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ordar);
            $entityManager->flush();

            return $this->redirectToRoute('ordar_index');
        }

        return $this->render('ordar/new.html.twig', [
            'ordar' => $ordar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ordar_show", methods={"GET"})
     */
    public function show(Ordar $ordar): Response
    {
        return $this->render('ordar/show.html.twig', [
            'ordar' => $ordar,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ordar_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ordar $ordar): Response
    {
        $form = $this->createForm(OrdarType::class, $ordar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ordar_index');
        }

        return $this->render('ordar/edit.html.twig', [
            'ordar' => $ordar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ordar_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ordar $ordar): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ordar->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ordar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ordar_index');
    }
}
