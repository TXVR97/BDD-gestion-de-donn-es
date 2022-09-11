<?php

namespace App\Controller\Admin;

use App\Entity\Planques;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class PlanquesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Planques::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('codeNum'),
            TextField::new('adress'),
            CountryField::new('pays'),
            ChoiceField::new('type')
                            ->setChoices([
                                'train' => 'train',
                                'avion' => 'avion',
                                'maison' => 'maison',
                                'sous le lit' => 'sous le lit',
                            ])
        ];
    }
    
}
