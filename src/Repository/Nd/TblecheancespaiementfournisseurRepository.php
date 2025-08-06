<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblecheancespaiementfournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblecheancespaiementfournisseur>
 *
 * @method Tblecheancespaiementfournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblecheancespaiementfournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblecheancespaiementfournisseur[]    findAll()
 * @method Tblecheancespaiementfournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblecheancespaiementfournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblecheancespaiementfournisseur::class);
    }

//    /**
//     * @return Tblecheancespaiementfournisseur[] Returns an array of Tblecheancespaiementfournisseur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tblecheancespaiementfournisseur
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
