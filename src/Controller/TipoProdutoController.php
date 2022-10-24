<?php

namespace App\Controller;

use App\Service\Services;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TipoProdutoController
{
    public function todos()
    {
        return new JsonResponse(Services::tipoProduto()->obterTodos());
    }

    public function salvar(Request $request): JsonResponse
    {
        $produtoServico = Services::tipoProduto();
        $resp = $produtoServico->salvar(json_decode($request->getContent()));
        return new JsonResponse($resp);
    }
}
