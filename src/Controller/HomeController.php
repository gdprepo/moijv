<?php

namespace App\Controller;

use App\Repository\GameRepository;
use App\Repository\CategoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/page/{page}", name="home_paginated")
     */

    public function index(GameRepository $gameRepository, CategoryRepository $categoriesBdd, PaginatorInterface $paginator, $page = 1): Response
    {

        $games = $gameRepository->getLatestPaginatedGames($paginator, $page);
        $games->setUsedRoute('home_paginated');

        // $app['categories'] = $categoriesBdd->getCategories();
        
        $categories = $categoriesBdd->getCategories();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'games' => $games,
            'categories' => $categories,
        ]);
    }

        /**
     * @Route("/category/{slug}", name="category")
     * @Route("/category/{slug}/{page}", name="category_paginated")
     */

    public function show_category(GameRepository $gameRepository, CategoryRepository $categoriesBdd, $slug, PaginatorInterface $paginator, $page = 1): Response
    {
        // $value = $categoriesBdd->find(16)->id;
        $category = $categoriesBdd->findOneBy([
            'slug' => $slug
        ]);

        $games = $gameRepository->findByExampleField($category, $paginator, $page);

        
        $categories = $categoriesBdd->getCategories();

        return $this->render('home/category.html.twig', [
            'controller_name' => 'HomeController',
            'category' => $category,
            'games' => $games,
            'categories' => $categories,
        ]);
    }
}
