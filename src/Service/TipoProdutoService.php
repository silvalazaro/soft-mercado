<?php

namespace App\Service\Produto;

use App\Model\Produto\Produto;
use App\Repository\Produto\ProdutoRepository;

class ProdutoService
{ 
    private  ProdutoRepository $repository;

    public function __construct()
    {
        $this->repository = new ProdutoRepository();
    }

    public function obterTodos()
    {
        return $this->repository->todos();
    }

    public function salvar($produto)
    {
        $produtoObjeto = new Produto($produto);
        return $this->repository->salvar($produtoObjeto);
    }

}
