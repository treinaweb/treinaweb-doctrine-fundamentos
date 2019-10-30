<?php

require_once "bootstrap.php";

$comment = $entityManager->find(App\Entities\Comment::class, 2);

echo "Comentário: (" . $comment->getId() . ") " . $comment->getMessage() . "<br>"; 

echo "Titulo do post: " . $comment->getPost()->getTitle() . "<br>";
echo "Conteudo do post: " . $comment->getPost()->getContent() . "<br>";

