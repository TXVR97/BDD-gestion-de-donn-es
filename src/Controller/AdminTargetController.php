<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminTargetController extends AbstractController
{
    #[Route('/admin/target', name: 'app_admin_target')]
    public function index(): Response
    {
        return $this->render('admin_target/index.html.twig', [
            'controller_name' => 'AdminTargetController',
        ]);
    }
}
