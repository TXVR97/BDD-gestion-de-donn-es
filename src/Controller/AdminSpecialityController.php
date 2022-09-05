<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSpecialityController extends AbstractController
{
    #[Route('/admin/speciality', name: 'app_admin_speciality')]
    public function index(): Response
    {
        return $this->render('admin_speciality/index.html.twig', [
            'controller_name' => 'AdminSpecialityController',
        ]);
    }
}
