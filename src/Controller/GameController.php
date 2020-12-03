<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\GameType;
use App\Repository\GameRepository;
use App\DataFixtures\CategoryFixtures;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    /**
     * @Route("/game/{id<\d+>}", name="game_details")
     */
    public function gameDetails(Game $game, CategoryRepository $categoriesBdd): Response
    {
        // $game = $gameRepository->find($id);

        // if($game == null)
        // {
        //     throw $this->createNotFoundException('Game not found');
        // }
        $categories = $categoriesBdd->getCategories();
        $name = $game->getCategory()->getName();


        return $this->render('game/details.html.twig', [
            'game' => $game,
            'categories' => $categories,
            'name' => $name
        ]);
    }

    /**
     * @Route("/game/add", name="game_add")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function gameForm(Request $request, EntityManagerInterface $manager, CategoryRepository $categoriesBdd): Response
    {
        $game = new Game();

        // $categories = $categoriesBdd->getCategories();
        $categories = $categoriesBdd->getCategory(1);

        $gameForm = $this->createForm(GameType::class, $game);

        $gameForm->handleRequest($request);

        if ($gameForm->isSubmitted() && $gameForm->isValid()) {
            $game->setDateAdd(new \DateTime());
            $game->setUser($this->getUser());
            // $game->setCategory();
            $manager->persist($game);
            $manager->flush();

            return $this->redirectToRoute('profile');
        }

        return $this->render('game/game-form.html.twig', [
            'game_form' => $gameForm->createView(),
        ]);
    }
}
