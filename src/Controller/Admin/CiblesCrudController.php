<?php

namespace App\Controller\Admin;

use App\Entity\Cibles;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CiblesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cibles::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            DateField::new('dateNaissance'),
            TextField::new('codeName'),
            CountryField::new('nationalite'),
        ];
    }
    
}
