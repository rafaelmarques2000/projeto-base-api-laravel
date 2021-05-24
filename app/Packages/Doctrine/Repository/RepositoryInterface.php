<?php

namespace App\Packages\Doctrine\Repository;

use Doctrine\ORM\QueryBuilder;

interface RepositoryInterface
{
    public function save(object $entity): void;

    public function update(object $entity): void;

    public function remove(object $entity): void;

    public function getQueryBuilder(): QueryBuilder;
}
