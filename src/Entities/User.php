<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

}
