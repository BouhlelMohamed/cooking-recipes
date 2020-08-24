<?php

namespace App\Controller;

use App\Repository\HomeRepository;
use App\Repository\PresentationHomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(HomeRepository $repo,PresentationHomeRepository $presentationRepo)
    {
        $home = $repo->find(1);
        $presentationHome = $presentationRepo->findAll();

        return $this->render('home/home.html.twig', [
            'home'  =>  $home,
            'presentationHome'  =>  $presentationHome
        ]);
    }
}
