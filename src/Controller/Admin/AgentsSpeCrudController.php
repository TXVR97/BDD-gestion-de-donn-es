<?php

namespace App\Controller\Admin;

use App\Entity\AgentsSpe;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class AgentsSpeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AgentsSpe::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('prenom'),
            DateField::new('date_de_naissance'),
            IntegerField::new('ID_code'),
            CountryField::new('nationality'),
            AssociationField::new('skills'),
        ];
    }
    
}
