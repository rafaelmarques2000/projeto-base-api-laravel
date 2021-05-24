<?php

namespace App\Packages\Pessoa\Commands;

use App\Packages\Pessoa\Commands\Service\PessoaCommandService;
use App\Packages\Pessoa\Facade\PessoaFacade;
use Illuminate\Console\Command;
use LaravelDoctrine\ORM\Facades\EntityManager;

class PessoaCommand extends Command
{
    protected $signature = 'pessoa:criar {nome} {idade} {sexo}';

    protected $description = 'Command para criar pessoa';

    public function handle()
    {
        PessoaCommandService::validatePessoaParams($this, $this->arguments());
        /** @var PessoaFacade $pessoaFacade */
        $pessoaFacade = app(PessoaFacade::class);
        $pessoaFacade->create($this->argument('nome'), $this->argument('idade'), $this->argument('sexo'));
        $this->info('Pessoa Criada com sucesso');
        EntityManager::flush();
    }
}
