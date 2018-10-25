<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class TagFixtures extends Fixture
{


    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Tag();
            $product->setName($faker->unique()->colorName());
            $manager->persist($product);
        }

        $manager->flush();
    }
}
