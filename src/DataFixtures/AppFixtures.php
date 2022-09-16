<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    

    

    public function load(ObjectManager $manager): void

    {   
        
        $user = new User();
        $user->setEmail('leboss@secret.com')
        ->setPassword('$2y$13$z/B8OItXN1xeEbOVA4UTn.BbJc2K4oo.4g5FaY6QuNf/qp44qjz3W')
        ->setRoles(array('ROLE_ADMIN'))
        ->setNom('Don')
        ->setPrenom('Miguel');

            
            
            
    

        $manager->persist($user);
        

        $manager->flush();
    }
}
