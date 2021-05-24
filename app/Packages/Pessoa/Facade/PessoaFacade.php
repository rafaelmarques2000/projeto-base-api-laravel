<?php

namespace App\Packages\Pessoa\Facade;

use App\Packages\Pessoa\Domain\Model\Pessoa;
use App\Packages\Pessoa\Domain\Model\TipoDeSexo;
use App\Packages\Pessoa\Domain\Repository\PessoaRepository;
use App\Packages\Pessoa\Service\ImageUploadService;
use Illuminate\Support\Collection;

class PessoaFacade
{
    private PessoaRepository $pessoaRepository;

    public function __construct(PessoaRepository $pessoaRepository)
    {
        $this->pessoaRepository = $pessoaRepository;
    }

    public function list(): Collection
    {
        return collect($this->pessoaRepository->findAll());
    }

    public function create(string $nome, int $idade, string $sexo): Pessoa
    {
        $pessoa = new Pessoa($nome, $idade, $sexo);
        $this->pessoaRepository->save($pessoa);
        return $pessoa;
    }

    public function getPessoasPeloSexo()
    {

    }

}
