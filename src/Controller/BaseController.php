<?php

namespace App\Controller;

use App\Repository\NavbarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    public function navbar(NavbarRepository $navbarRepository)
    {
        $navbar = $navbarRepository->findAll();
        return $this->renderView('base.html.twig', [
            'navbar' => $navbar,
        ]);
    }
}
