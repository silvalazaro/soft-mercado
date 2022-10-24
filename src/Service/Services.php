<?php

namespace App\Service;

abstract class Services
{
    private static ?ProdutoService $produtoService = null;

    private static ?TipoProdutoService $tipoProdutoService = null;


    public static function produto():ProdutoService
    {
        if(!self::$produtoService) self::$produtoService = new ProdutoService();
        return self::$produtoService;
        
    }

    public static function tipoProduto():TipoProdutoService
    {
        if(!self::$tipoProdutoService) self::$tipoProdutoService = new TipoProdutoService();
        return self::$tipoProdutoService;
        
    }
}
