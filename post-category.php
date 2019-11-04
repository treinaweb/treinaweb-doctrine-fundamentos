<?php

require_once "bootstrap.php";

use Doctrine\Common\Collections\ArrayCollection;

// $cat = new App\Entities\Category;
// $cat->setName("C#");
// $entityManager->persist($cat);

// $cat02 = new App\Entities\Category;
// $cat02->setName("Java");
// $entityManager->persist($cat02);

$post = $entityManager->find(App\Entities\Post::class, 3);
// $post->setCategories(new ArrayCollection([$cat, $cat02]));

// $entityManager->flush();

foreach ($post->getCategories() as $category) {
    echo "Categoria: " . $category->getName() . "<br>";
}

