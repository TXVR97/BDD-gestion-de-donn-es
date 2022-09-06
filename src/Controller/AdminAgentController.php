<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAgentController extends AbstractController
{
    #[Route('/admin/agent', name: 'app_admin_agent')]
    public function index(): Response
    {
        return $this->render('admin_agent/index.html.twig', [
            'controller_name' => 'AdminAgentController',
        ]);
    }
}
