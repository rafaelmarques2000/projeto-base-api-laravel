<?php

namespace App\Packages\Pessoa\Response;

use App\Packages\Pessoa\Domain\Model\Pessoa;

class PessoaResponse
{
    private Pessoa $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function formatResponse()
    {
        return [
            'id' => $this->pessoa->getId(),
            'nome' => $this->pessoa->getNome(),
            'idade' => $this->pessoa->getIdade(),
            'sexo' => $this->pessoa->getSexo(),
            'ativo' => $this->pessoa->isActive()
        ];
    }


}
