<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private $categories = ['Architectures', 'Sculpture', 'Arts visuels', 'Arts de la scène', 'Musique', 'Cinéma'];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->categories as $category) {
            $cat = new Category();
            $cat->setName($category);
            $manager->persist($cat);
        }
        $manager->flush();
    }
}
