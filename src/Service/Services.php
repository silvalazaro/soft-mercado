<?php

namespace App\Service;

use App\Service\Produto\ProdutoService;

abstract class Services
{
    private static ?ProdutoService $produtoService = null;


    public static function produto():ProdutoService
    {
        if(!self::$produtoService) self::$produtoService = new ProdutoService();
        return self::$produtoService;
        
    }
}
