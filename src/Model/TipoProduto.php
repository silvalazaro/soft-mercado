<?php

namespace App\Model;

use App\Model\Modelo;

class TipoProduto extends Modelo
{
    private ?int $id = null;
    private ?string $nome = null;
    private ?string $imposto = null;
    
    protected array $serialize = ['nome', 'id', 'imposto'];
    protected array $fillable = ['nome', 'id', 'imposto'];

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getImposto()
    {
        return $this->imposto;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }

    public function setImposto(string $imposto)
    {
        return $this->imposto = $imposto;
    }
}
