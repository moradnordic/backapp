<?php

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
        $stmt = $this->pdo->query("SELECT * FROM tblPiecesDePayementClients");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getClientPaymentPieces(string $clientId): array
    {
        $sql = "SELECT
            p.[N°] AS NC,
            p.NumPiece,
            t.Mode AS TypeDePaiement,
            c.NomClient,
            p.DateReception,
            p.Echeance,
            p.Montant,
            p.EmetteurPiece AS em,
            p.DateVersement,
            p.DateRemise,
            p.DateFactureRegler,
            b.AbrvBanquesMar AS client_bank,
            p.ReferenceBanque,
            p.RefFactures,
            n.Abrev AS nos_banque,
            p.TypeVersements,
            p.NePasVerser
        FROM ((((tblPiecesDePayementClients p
            LEFT JOIN tblVersementsBanqueMarocaines v ON p.NumRemise = v.[N°])
            LEFT JOIN tblNosBanques n ON v.VersChezBanque = n.[N°])
            LEFT JOIN tblBanquesMarocaines b ON p.BanqueDuTire = b.[N°])
            LEFT JOIN tblClientsLocaux c ON p.Client = c.[N°])
            LEFT JOIN tblTypeModePaiementLocaux t ON p.TypeDePaiement = t.[N°]
        WHERE
            p.Valide = 1
            AND p.Selected = 0
            AND c.CodeClientSage LIKE ?
            AND p.Sort IS NULL
            AND p.annuler = 0
        ORDER BY p.Echeance";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$clientId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getClientPaymentPieces1(string $clientId): array
    {
        $sql = "SELECT
           p.\"N°\" AS NC

        FROM tblPiecesDePayementClients p
            ";

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}
