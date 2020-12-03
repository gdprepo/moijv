<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
// use App\DataFixtures\Factory;

class UserFixtures extends Fixture
{
    const USER_COUNT = 40;

    private $userPasswordEncoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $password = $this->userPasswordEncoder->encodePassword(new User(), 'user');

        for ($i=0; $i < self::USER_COUNT; $i++) { 
            $user = new User();

            $user->setEmail($faker->email);
            $user->setFirstname($faker->firstname);
            $user->setLastname($faker->lastname);
            $user->setDateInscription(new \Datetime());
            $user->setPassword($password);
            $user->setDescription($faker->text);
            
            $this->addReference('user'.$i, $user);
    
            $manager->persist($user);
        }
        $manager->flush();



    }
}
