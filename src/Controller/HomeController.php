<?php

namespace App\Controller;

use App\Entity\Missions;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }




    #[Route('/accueil', name: 'missions')]
    public function index(): Response
    {

        $missions = $this->entityManager->getRepository(Missions::class)->findAll();
        
        return $this->render('home/index.html.twig',[
            'missions' => $missions
            ]);
    }


    #[Route('/details/{slug}', name: 'mission')]
    public function details($slug): Response
    {
        
        $mission = $this->entityManager->getRepository(Missions::class)->findOneBySlug($slug);

        if (!$mission){
            return $this-> redirectToRoute('missions');
        }
        
        return $this->render('missions/index.html.twig',[
            'mission' => $mission
            ]);
    }
}
