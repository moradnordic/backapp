<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FTarifgam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FTarifgam>
 *
 * @method FTarifgam|null find($id, $lockMode = null, $lockVersion = null)
 * @method FTarifgam|null findOneBy(array $criteria, array $orderBy = null)
 * @method FTarifgam[]    findAll()
 * @method FTarifgam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FTarifgamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FTarifgam::class);
    }

//    /**
//     * @return FTarifgam[] Returns an array of FTarifgam objects
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

//    public function findOneBySomeField($value): ?FTarifgam
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
