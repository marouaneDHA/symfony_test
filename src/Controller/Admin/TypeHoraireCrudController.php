<?php

namespace App\Controller\Admin;

use App\Entity\TypeHoraire;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;


class TypeHoraireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeHoraire::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
        ];
    }

    public function deleteEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if (!$entityInstance instanceof TypeHoraire) return;

        foreach ($entityInstance->getHoraires() as $horaire) {
            $em->remove($horaire);
        }

        parent::deleteEntity($em, $entityInstance);
    }
    
}
