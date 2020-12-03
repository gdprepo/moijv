<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORY_COUNT = 3;
    const CATEGORIES = [
        "PC",
        "PS4",
        "XBOX",
        "Nintendo"

    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach(self::CATEGORIES as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $category->setSlug(strtolower($category->getName()));
            $manager->persist($category);
            $this->addReference('category'.$i, $category);
            $i++;
        }

        // $category = new Category();
        // $category->setName("FPS");
        // $category->setSlug(strtolower($category->getName()));
        // $this->addReference('category0', $category);

        // $manager->persist($category);

        // $category2 = new Category();
        // $category2->setName("MMO");
        // $category2->setSlug(strtolower($category2->getName()));
        // $this->addReference('category1', $category2);

        // $manager->persist($category2);

        // $category3 = new Category();
        // $category3->setName("RPG");
        // $category3->setSlug(strtolower($category3->getName()));
        // $this->addReference('category2', $category3);

        // $manager->persist($category3);

        $manager->flush();
    }
}
