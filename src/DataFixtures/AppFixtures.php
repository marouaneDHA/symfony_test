<?php

namespace App\DataFixtures;

use App\Factory\HoraireFactory;
use App\Factory\TypeHoraireFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        TypeHoraireFactory::createMany(5);
        HoraireFactory::createMany(12, function () {
            return [
                'typeHoraire' => TypeHoraireFactory::random(),
            ];
        });

    }
}
