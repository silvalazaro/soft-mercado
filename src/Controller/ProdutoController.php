<?php

namespace App\Controller;

use App\Model\Produto\Produto;
use App\Service\Services;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProdutoController
{
    public function todos()
    {
        return new JsonResponse(Services::produto()->obterTodos());
    }

    public function salvar(Request $request): JsonResponse
    {
        $produtoServico = Services::produto();
        $resp = $produtoServico->salvar(json_decode($request->getContent()));
        return new JsonResponse($resp);
    }
}
