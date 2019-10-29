<?php

namespace App\Repositories;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository 
{
    /**
     * Retorna todos os usuários cadastrados
     *
     * @return void
     */
    public function getAllUsers()
    {
        return $this->_em->createQuery("SELECT u FROM App\Entities\User u")->getResult();
    }

}