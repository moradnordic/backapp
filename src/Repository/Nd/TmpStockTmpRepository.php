<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TmpStockTmp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TmpStockTmp>
 *
 * @method TmpStockTmp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TmpStockTmp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TmpStockTmp[]    findAll()
 * @method TmpStockTmp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TmpStockTmpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TmpStockTmp::class);
    }

//    /**
//     * @return TmpStockTmp[] Returns an array of TmpStockTmp objects
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

//    public function findOneBySomeField($value): ?TmpStockTmp
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
