<?php

namespace App\Controller;

use App\Repository\FooterRepository;
use App\Repository\NavbarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipesController extends AbstractController
{
    /**
     * @Route("/recettes", name="recipes")
     */
    public function index(NavbarRepository $navbarRepo, FooterRepository $footerRepo)
    {
        $navbar = $navbarRepo->findAll();
        $footer = $footerRepo->findAll();

        return $this->render('recipes/index.html.twig', [
            'footer'            =>  $footer,
            'navbar'            =>  $navbar,
        ]);
    }
}
