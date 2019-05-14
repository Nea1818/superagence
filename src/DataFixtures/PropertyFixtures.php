<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PropertyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++) {
            $property = new Property();
            $property ->setTitle($faker->words(3, true))
                      ->setDescription($faker->sentences(3, true))
                      ->setSurface($faker->numberBetween(20, 150))
                      ->setRooms($faker->numberBetween(2, 8))
                      ->setBedrooms($faker->numberBetween(1, 6))
                      ->setFloor($faker->numberBetween(0, 14))
                      ->setPrice($faker->numberBetween(150000, 1500000))
                      ->setCity($faker->city)
                      ->setAdress($faker->address)
                      ->setPostalCode($faker->postcode)
                      ->setSold(false);
            $manager->persist($property);
        }
        $manager->flush();
    }
}
