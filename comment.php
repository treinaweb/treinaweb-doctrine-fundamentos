<?php

require_once "bootstrap.php";

$post = new App\Entities\Post;
$post->setTitle("meu primeiro post");
$post->setContent("bem vindo ao meu primeiro post...");

$entityManager->persist($post);

$comment1 = new App\Entities\Comment;
$comment1->setMessage("Muito bom esse post");
$comment1->setPost($post);

$entityManager->persist($comment1);

$comment2 = new App\Entities\Comment;
$comment2->setMessage("Muito bom esse post 2");
$comment2->setPost($post);

$entityManager->persist($comment2);

$entityManager->flush();