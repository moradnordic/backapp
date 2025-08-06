<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\StockAdjustement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StockAdjustement>
 *
 * @method StockAdjustement|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockAdjustement|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockAdjustement[]    findAll()
 * @method StockAdjustement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockAdjustementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockAdjustement::class);
    }

//    /**
//     * @return StockAdjustement[] Returns an array of StockAdjustement objects
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

//    public function findOneBySomeField($value): ?StockAdjustement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
