<?php

namespace App\Repository;

use App\Database\Database;
use App\Model\TipoProduto;
use PDO;

class TipoProdutoRepository
{
    private string $tabela = 'tipo_produto';

    public function todos()
    {
        $sql = 'SELECT * FROM '. $this->tabela;
        $pdo = Database::getPdo();
        $sth = $pdo->query($sql);
        $rows = $sth->fetchAll();
        
        return $rows;
    }

    public function salvar(TipoProduto $tipoProduto)
    {
        $sql = 'INSERT INTO '. $this->tabela . ' (nome) VALUES(:nome)';

        $pdo = Database::getPdo();

        $statement = $pdo->prepare($sql);
            $statement->execute([
                ':nome' => $tipoProduto->getNome()
            ]);

        return $tipoProduto;
    }
}
