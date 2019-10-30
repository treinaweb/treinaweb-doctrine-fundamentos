<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    public function getId()
    {
        return $this->id;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
