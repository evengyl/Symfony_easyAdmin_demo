<?php

namespace App\Controller;

use App\Entity\Pokemons;
use App\Entity\PokeType;
use App\Repository\PokemonsRepository;
use App\Repository\PokeTypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommonController extends AbstractController
{
    #[Route('/common', name: 'common')]
    public function common(): Response
    {
        $arrayTest = ["tata", "toto", "tutu", "titi"];

        dump($arrayTest);

        return $this->render('common/common.html.twig', [
            'controller_name' => 'TOTO UTUT TITI TATA  ',
            "arrayTest" => $arrayTest,
        ]);
    }

    

    #[Route('/pokemons', name: 'pkn')]
    public function pkn(PokemonsRepository $repoPoke): Response
    {
        $poke = $repoPoke->find("1");
        $type = $poke->getTypes()->getValues();
        $dresseur = $poke->getDresseur()->getValues();
        dump($poke);
        dump($type);
        dump($dresseur);
        

        return $this->render('common/pokemon.html.twig');
    }

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('common/home.html.twig', [
        ]);
    }



    #[Route("/contact", name : "contact")]
    public function contact(): Response
    {
        return $this->render('common/contact.html.twig', [
            'controller_name' => 'CommonController',
        ]);
    }

}
