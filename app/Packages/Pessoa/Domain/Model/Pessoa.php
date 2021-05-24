<?php

namespace App\Packages\Pessoa\Domain\Model;

use App\Packages\Doctrine\Traits\identifiable;
use Doctrine\ORM\Mapping as ORM;

use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/** @ORM\Entity */
class Pessoa
{
    use identifiable, SoftDeleteableEntity, TimestampableEntity;

    /** @ORM\Column (type="string") */
    private string $nome;
    /** @ORM\Column (type="integer") */
    private int $idade;
    /** @ORM\Column (type="string") */
    private string $sexo;
    /** @ORM\Column (type="boolean") */
    private string $active;

    public function __construct(string $nome, int $idade, string $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->active = true;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getSexo(): string
    {
        return $this->sexo;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

}
