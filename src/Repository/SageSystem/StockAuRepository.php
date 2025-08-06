<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\StockAu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StockAu>
 *
 * @method StockAu|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockAu|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockAu[]    findAll()
 * @method StockAu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockAuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockAu::class);
    }

//    /**
//     * @return StockAu[] Returns an array of StockAu objects
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

//    public function findOneBySomeField($value): ?StockAu
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
