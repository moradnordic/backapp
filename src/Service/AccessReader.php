<?php

// src/Service/AccessReader.php
namespace App\Service;

class AccessReader
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO(
            "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=Z:\\BD_ND.accdb;"
        );
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getCaisseTables(): array
    {
        $stmt = $this->pdo->query("SELECT TOP 5 * FROM tblCaisse_ListTables");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

