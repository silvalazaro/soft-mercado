<?php

namespace App\Model\Produto;

use App\Model\Modelo;

class TipoProduto extends Modelo
{
    private ?int $id;
    private ?int $nome;
    
    protected array $serialize = ['nome', 'id'];
    protected array $fillable = ['nome', 'id'];

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
