<?php

namespace App\Controller;

use App\Repository\FooterRepository;
use App\Repository\HomeRepository;
use App\Repository\NavbarRepository;
use App\Repository\PresentationHomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(HomeRepository $repo,PresentationHomeRepository $presentationRepo,NavbarRepository $navbarRepo,FooterRepository $footerRepo)
    {
        $home = $repo->find(1);
        $presentationHome = $presentationRepo->findAll();
        $navbar = $navbarRepo->findAll();
        $footer = $footerRepo->findAll();

        return $this->render('home/home.html.twig', [
            'home'              =>  $home,
            'navbar'            =>  $navbar,
            'presentationHome'  =>  $presentationHome,
            'footer'            =>  $footer
        ]);
    }
}
