<?php

namespace App\Packages\Pessoa\Domain\Repository;

use App\Packages\Doctrine\Repository\Repository;
use App\Packages\Pessoa\Domain\Model\Pessoa;

class PessoaRepository extends Repository
{
    protected string $entityName = Pessoa::class;

    public function findBySexo(string $sexo)
    {
        return $this->findOneBy(['sexo' => $sexo]);
    }

}
