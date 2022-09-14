<?php

namespace App\Controller\Admin;

use App\Entity\Missions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;

class MissionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Missions::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud 
        ->setEntityLabelInPlural('Missions') 
        ->setEntityLabelInSingular('Mission')

        ->setPageTitle("index","BDD - Admin missions");

    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            SlugField::new('slug')->setTargetFieldName('titre'),
            TextareaField::new('description'),
            TextField::new('nom_de_code'),
            CountryField::new('pays'),
            AssociationField::new('AgentsSpec'),
            AssociationField::new('Contacts'),
            AssociationField::new('Cibles'),
            ChoiceField::new('type_mission')->setChoices([
                'Assassinat' => 'Assassinat',
                'Enlèvement' => 'Enlèvement',
                'Espionnage' => 'Espionnage',

            ]),
            ChoiceField::new('statut')->setChoices([
                'Active' => 'Active',
                'Echec' => 'Echec',
            ]),
            AssociationField::new('Planques'),
            AssociationField::new('Skills'),
            DateField::new('date_debut'),
            DateField::new('date_fin'),
        ];
    }
    


}