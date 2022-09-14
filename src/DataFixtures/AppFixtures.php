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
        ->setPlainPassword('lsdB1')
        ->setRoles(array('ROLE_ADMIN'))
        ->setNom('Don')
        ->setPrenom('Miguel');

            
            
            
    

        $manager->persist($user);
        

        $manager->flush();
    }
}
