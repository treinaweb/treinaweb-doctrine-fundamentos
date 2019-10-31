<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post
{
    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\OneToMany(targetEntity="App\Entities\Comment", mappedBy="post")
     */
    private $comments;


    public function getId()
    {
        return $this->id;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments(ArrayCollection $comments)
    {
        $this->comments = $comments;

        foreach ($comments as $comment) {
            $comment->setPost($this);
        }

        return $this;
    }
}
