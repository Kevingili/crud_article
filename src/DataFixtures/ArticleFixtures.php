<?php

namespace App\DataFixtures;
use App\Entity\Article;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        // create 20 products! Bam!

        $tags = $manager->getRepository(Tag::class)->findBy([], null, 2);

        for ($i = 0; $i < 20; $i++) {
            $product = new Article();
            $product->setName($faker->jobTitle);
            $product->setDescription($faker->text);

            foreach ($tags as $tag) {
                $product->addTag($tag);
            }

            $manager->persist($product);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            TagFixtures::class,
        );
    }
}