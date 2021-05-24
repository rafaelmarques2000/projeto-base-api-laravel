<?php

namespace App\Packages\Pessoa\Response;

use App\Packages\Pessoa\Domain\Model\Pessoa;
use Illuminate\Support\Collection;

class PessoaResponseList
{
    private Collection $pessoas;

    public function __construct(Collection $pessoas)
    {
        $this->pessoas = $pessoas;
    }

    public function formatResponse()
    {
        return $this->pessoas->map(fn(Pessoa $pessoa) => (new PessoaResponse($pessoa))->formatResponse())->toArray();
    }


}
