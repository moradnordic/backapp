<?php

namespace App\Service;

class NDfunction
{
    public function getCaisseTables(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM tblPiecesDePayementClients");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}
