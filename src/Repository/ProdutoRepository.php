<?php

namespace App\Repository;

use App\Database\Database;
use App\Model\Produto;
use PDO;

class ProdutoRepository
{
    private string $tabela = 'produtos';

    public function todos()
    {
        $sql = 'SELECT * FROM '. $this->tabela;
        $pdo = Database::getPdo();
        $sth = $pdo->query($sql);
        $rows = $sth->fetchAll();
        
        return $rows;
    }

    public function salvar(Produto $produto)
    {
        $sql = 'INSERT INTO produtos (nome) VALUES(:nome)';

        $pdo = Database::getPdo();

        $statement = $pdo->prepare($sql);
            $statement->execute([
                ':nome' => $produto->getNome()
            ]);

        return $produto;
    }
}
