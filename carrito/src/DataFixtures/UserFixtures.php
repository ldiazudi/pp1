<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $hashedPassword = '$2y$13$JSRkfb4K8r3Ro1ceR3CvFOEcrB/ffbrqkdfUwzogWIhSYqRGyr0ce';

        for ($i = 1; $i <= 5; $i++) {
            $user = new User();

            $user
                ->setNombre('Usuario' . $i)
                ->setEmail('usuario' . $i . '@gmail.com')
                ->setPassword($hashedPassword);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
