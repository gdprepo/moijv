<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileFormType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     * @Route("/user/{id<\d+>}", name="user_details")
     */
    public function details(User $user = null, CategoryRepository $categoriesBdd): Response
    {
        $user = $user ?? $this->getUser();

        if ($user === $this->getUser()) {
            $check = true;
        } else {
            $check = false;
        }

        if( ! $user ) {
            return $this->redirectToRoute('login');
        }

        $categories = $categoriesBdd->getCategories();


        return $this->render('user/details.html.twig', [
            'user' => $user,
            'categories' => $categories,
            'check' => $check,
        ]);
    }

    /**
     * @Route("/profile/update", name="profile_upd")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function profileForm(Request $request, EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();

        $userForm = $this->createForm(ProfileFormType::class, $user);

        $userForm->handleRequest($request);

        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $user->setFirstname($userForm->get('firstname')->getData());
            $user->setLastname($userForm->get('lastname')->getData());
            $user->setEmail($userForm->get('email')->getData());
            // $user->setAvatar($userForm->get('avatar')->getData());
            $user->setDescription($userForm->get('description')->getData());

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('profile');
        }

        return $this->render('user/profileEdit.html.twig', [
            'profileForm' => $userForm->createView(),
        ]);
    }
}
