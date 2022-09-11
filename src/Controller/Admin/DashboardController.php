<?php

namespace App\Controller\Admin;


use App\Entity\Cibles;
use App\Entity\Skills;
use App\Entity\Contacts;
use App\Entity\Missions;
use App\Entity\Planques;

use App\Entity\AgentsSpe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('BDD Administration')
            ->renderSidebarMinimized();
            
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Missions', ' fa fa-scroll', Missions::class);
        yield MenuItem::linkToCrud('Specialites', ' fa fa-book-skull', Skills::class);
        yield MenuItem::linkToCrud('Agents', ' fa fa-user-ninja', AgentsSpe::class);
        yield MenuItem::linkToCrud('Cibles', ' fa fa-crosshairs', Cibles::class);
        yield MenuItem::linkToCrud('Contacts', ' fa fa-phone', Contacts::class);
        yield MenuItem::linkToCrud('Planques', ' fa fa-eye-slash', Planques::class);
        
    }
}
