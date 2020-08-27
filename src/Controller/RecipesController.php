<?php

namespace App\Controller;

use App\Repository\FooterRepository;
use App\Repository\NavbarRepository;
use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipesController extends AbstractController
{
    /**
     * @Route("/recettes", name="recipes")
     */
    public function index(NavbarRepository $navbarRepo, FooterRepository $footerRepo,
    RecipeRepository $recipeRepo)
    {
        $navbar = $navbarRepo->findAll();
        $footer = $footerRepo->findAll();
        $recipes = $recipeRepo->findAll();

        return $this->render('recipes/index.html.twig', [
            'footer'            =>  $footer,
            'navbar'            =>  $navbar,
            'recipes'           =>  $recipes
        ]);
    }
}
