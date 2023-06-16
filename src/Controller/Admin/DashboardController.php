<?php

namespace App\Controller\Admin;

use App\Entity\Horaire;
use App\Entity\TypeHoraire;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) 
    {

    }
    
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(HoraireCrudController::class)
            ->generateUrl();

        return $this->redirect($url);
    
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Test Symfony');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('test Symfony');

        yield MenuItem::section('Horaires');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Ajouter Horaire', 'fas fa-plus', Horaire::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Visualiser les Horaires', 'fas fa-eye', Horaire::class)
        ]);

        yield MenuItem::section('Types Horaire');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Ajouter un type d\'Horaire', 'fas fa-plus', TypeHoraire::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Visualiser les type d\'Horaire', 'fas fa-eye', TypeHoraire::class)
        ]);
    }
}
