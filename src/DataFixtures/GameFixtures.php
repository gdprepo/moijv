<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Game;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Migrations\Exception\DependencyException;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Repository\GameRepository;
// use App\DataFixtures\Factory;

class GameFixtures extends Fixture implements DependentFixtureInterface
{
    const USER_COUNT = 40;
    const CATEGORY_COUNT = 3;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        // $categories = Category::all();

        for ($i=0; $i < 60; $i++) { 
            $game = new Game();

            $game->setName($faker->text(25));
            $game->setDateAdd($faker->dateTimeBetween('-2 years', 'now'));
            $game->setDescription($faker->text(300));
            $game->setUser($this->getReference('user'.random_int(0, UserFixtures::USER_COUNT - 1)));
            $game->setCategory($this->getReference('category'.random_int(0, count(CategoryFixtures::CATEGORIES) -1)));
    
            $manager->persist($game);

        }

        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            UserFixtures::class
        ];
    }
}
