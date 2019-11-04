<?php

require_once "bootstrap.php";

// $d = new App\Entities\Detail;
// $d->setStatus("publicado");
// $d->setVisibility("publico");
// $entityManager->persist($d);

$post = $entityManager->find(App\Entities\Post::class, 3);

// $post->setDetail($d);

// $entityManager->flush();

echo "Status:" . $post->getDetail()->getStatus() . "<br>";
echo "Visibilidade:" . $post->getDetail()->getVisibility() . "<br>";