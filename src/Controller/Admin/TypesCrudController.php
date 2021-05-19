<?php

namespace App\Controller\Admin;

use App\Entity\Types;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TypesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Types::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
        ];
    }
    
}
