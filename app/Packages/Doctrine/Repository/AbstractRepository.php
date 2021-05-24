<?php
namespace App\Packages\Doctrine\Repository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class AbstractRepository extends EntityRepository
{
    protected string $entityName = '';

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, new \Doctrine\ORM\Mapping\ClassMetadata($this->entityName));
    }
}
