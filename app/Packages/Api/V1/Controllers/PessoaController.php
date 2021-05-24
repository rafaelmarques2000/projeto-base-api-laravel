<?php

namespace App\Packages\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use App\Packages\Pessoa\Domain\Model\Pessoa;
use App\Packages\Pessoa\Facade\PessoaFacade;
use App\Packages\Pessoa\Request\PessoaRequest;
use App\Packages\Pessoa\Response\PessoaResponse;
use App\Packages\Pessoa\Response\PessoaResponseList;
use Illuminate\Http\Request;


class PessoaController extends Controller
{
    private PessoaFacade $pessoaFacade;

    public function __construct(PessoaFacade $pessoaFacade)
    {
        $this->pessoaFacade = $pessoaFacade;
    }

    public function index()
    {
        try {
            $pessoas = $this->pessoaFacade->list();
            return response()->success((new PessoaResponseList($pessoas))->formatResponse());
        } catch (\Exception $exception) {
            return response()->error($exception);
        }
    }

    public function store(PessoaRequest $request)
    {
        return response()->json(['ok' => true]);
    }

    public function show(Pessoa $pessoa)
    {
        try {
            return response()->success((new PessoaResponse($pessoa))->formatResponse());
        } catch (\Exception $exception) {
            return response()->error($exception);
        }
    }
}
