<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('home/accueil.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function index(ProduitRepository $repository): Response
    {
        $produits = $repository->findAll();

        return $this->render('home/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     * @Route("/details/{id}", name="details")
     */
    public function details($id, ProduitRepository $repository)  {
        $produitsDetail = $repository->findBy(['id' => $id]);

        return $this->render('home/produitDetail.html.twig',['detailsProduit' => $produitsDetail]);
    }

    /**
     * @Route("/news/{id}", name="news")
     */
    public function news($id, ProduitRepository $repository)  {
        $produitsDetail = $repository->findBy(['id' => $id]);

        return $this->render('home/news.html.twig',['detailsProduit' => $produitsDetail]);
    }

}
