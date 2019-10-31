<?php

require_once "bootstrap.php";

use Doctrine\Common\Collections\ArrayCollection;

// $comment = $entityManager->find(App\Entities\Comment::class, 2);

// echo "Comentário: (" . $comment->getId() . ") " . $comment->getMessage() . "<br>";

// echo "Titulo do post: " . $comment->getPost()->getTitle() . "<br>";
// echo "Conteudo do post: " . $comment->getPost()->getContent() . "<br>";

$cn1 = new App\Entities\Comment;
$cn1->setMessage("novo comentario 1");

$cn2 = new App\Entities\Comment;
$cn2->setMessage("novo comentario 2");

$entityManager->persist($cn1);
$entityManager->persist($cn2);

$post = $entityManager->find(App\Entities\Post::class, 3);

$post->setComments(new ArrayCollection([$cn1, $cn2]));

$entityManager->flush();

foreach ($post->getComments() as $comment) {
    echo $comment->getMessage() . "<br>";
}
