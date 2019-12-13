<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # Liste pour mon selecteur de categories
        $categories = ['Professionnel', 'Personnel', 'Important'];
        # Tableau pour enregistrer chaque object de type Category
        $tabCategories = [];
        # Boucle pour créer autant d'objet de catégories dans la liste
        foreach ($categories as $cat) {
            $category = new Category();
            $category->setName($cat);
            $manager->persist($category);
            array_push($tabCategories, $category);
        }
        # Instance de type Todo
        $uneTodo = new Todo();
        $uneTodo
            ->setTitle('Initialiser la todo')
            ->setContent('Alimenter la base de données avec un premier enregistrement')
            ->setTodoFor(new \DateTime('Europe/paris'))
            ->setCategory($tabCategories[0]);
        # Enregistre l'objet
        $manager->persist($uneTodo);
        # On finalise la fin de la requete
        $manager->flush();
    }
}
