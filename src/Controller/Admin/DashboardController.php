<?php

namespace App\Controller\Admin;

use App\Entity\Dresseurs;
use App\Entity\Pokemons;
use App\Entity\Types;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin Pokemons');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::section('Admin pokemons'),
            MenuItem::subMenu("Pokemons", 'fa fa-home')->setSubItems([
                MenuItem::linktoCrud('Pokemons', 'fa fa-home', Pokemons::class),
                MenuItem::linktoCrud('Dresseurs', 'fa fa-home', Dresseurs::class),
                MenuItem::linktoCrud('Types', 'fa fa-home', Types::class),
            ])
            
            // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        ];
    }
}
