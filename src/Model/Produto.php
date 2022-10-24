<?php

namespace App\Model;

use App\Model\Modelo;
use App\Support\Str;

class Produto extends Modelo
{
    private ?int $id = null;
    private ?string $nome = null;

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

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }
}
