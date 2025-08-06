<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FTarif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FTarif>
 *
 * @method FTarif|null find($id, $lockMode = null, $lockVersion = null)
 * @method FTarif|null findOneBy(array $criteria, array $orderBy = null)
 * @method FTarif[]    findAll()
 * @method FTarif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FTarifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FTarif::class);
    }

//    /**
//     * @return FTarif[] Returns an array of FTarif objects
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

//    public function findOneBySomeField($value): ?FTarif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
