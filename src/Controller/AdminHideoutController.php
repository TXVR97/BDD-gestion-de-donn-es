<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminHideoutController extends AbstractController
{
    #[Route('/admin/hideout', name: 'app_admin_hideout')]
    public function index(): Response
    {
        return $this->render('admin_hideout/index.html.twig', [
            'controller_name' => 'AdminHideoutController',
        ]);
    }
}
