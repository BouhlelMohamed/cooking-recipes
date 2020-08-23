<?php

namespace App\Controller;

use App\Entity\Home;
use App\Repository\HomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(HomeRepository $repo)
    {
        $home = $repo->find(1);

        return $this->render('home/home.html.twig', [
            'home'  =>  $home
        ]);
    }
}
