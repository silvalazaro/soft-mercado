<?php

namespace App\Service;

use App\Model\TipoProduto;
use App\Repository\TipoProdutoRepository;

class TipoProdutoService
{ 
    private  TipoProdutoRepository $repository;

    public function __construct()
    {
        $this->repository = new TipoProdutoRepository();
    }

    public function obterTodos()
    {
        return $this->repository->todos();
    }

    public function salvar($tipoProduto)
    {
        $tipoProdutoObjeto = new TipoProduto($tipoProduto);
        return $this->repository->salvar($tipoProdutoObjeto);
    }

}
