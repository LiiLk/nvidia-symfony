<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitFormType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Builder\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(ProduitRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }


    /**
<<<<<<< HEAD
=======
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('home/accueil.html.twig');
    }

    /**
>>>>>>> feature/Produit
     * @Route("/home", name="home")
     */
    public function index()
    {
        $produits = $this->repository->findAll();

        return $this->render('home/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     * @Route("/ajoutproduit", name="ajoutproduit")
     */
    public function ajout(Request $request){
        $produit = new Produit();
        $form = $this->createForm(ProduitFormType::class, $produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($produit);
            $this->em->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('home/produitAjout.html.twig', [
            'produit' => $produit,
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/editproduit/{id}", name="editproduit", methods="GET|POST")
     */
    public function edit(Produit $produit, Request $request){
        $form = $this->createForm(ProduitFormType::class, $produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('home/produitEdit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/supprimerproduit/{id}", name="supprimerproduit")
     * @param Produit $produit
     * @return RedirectResponse
     */
    public function supprimer(Produit $produit, Request $request){
        if ($produit) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
        }
        return $this->redirectToRoute('home');
    }


    /**
     * @Route("/details/{id}", name="details")
     */
    public function details($id)  {
        $produitsDetail = $this->repository->findBy(['id' => $id]);

        return $this->render('home/produitDetail.html.twig',['detailsProduit' => $produitsDetail]);
    }

    /**
     * @Route("/news/{id}", name="news")
     */
    public function news($id)  {
        $produitsDetail = $this->repository->findBy(['id' => $id]);

        return $this->render('home/news.html.twig',['detailsProduit' => $produitsDetail]);
    }

}
