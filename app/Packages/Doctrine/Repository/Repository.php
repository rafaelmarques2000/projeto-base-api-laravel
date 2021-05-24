<?php

namespace App\Packages\Doctrine\Repository;

use Doctrine\ORM\QueryBuilder;

/**
 * Class Repository
 * @package App\Packages\Doctrine
 */
class Repository extends AbstractRepository implements RepositoryInterface
{
    public function save(object $entity): void
    {
        $this->_em->persist($entity);
    }

    public function update(object $entity): void
    {
        $this->_em->merge($entity);
    }

    public function remove(object $entity): void
    {
        $this->_em->remove($entity);
    }

    public function getQueryBuilder(): QueryBuilder
    {
       return $this->_em->createQueryBuilder();
    }
}
