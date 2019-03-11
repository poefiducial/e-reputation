<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for($i=1; $i <= 10;$i++) {
            $user = new User();
            $user->setUseremail($faker->email());
            $user->setUserlogin($faker->email());
            $user->setUserfirstname($faker->firstname());
            $user->setUserlastname($faker->lastname());
            $user->setUserpassword($faker->password());
            $manager->persist($user);
        }


        $manager->flush();
    }
}
