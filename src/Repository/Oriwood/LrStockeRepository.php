<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrStocke;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrStocke>
 *
 * @method LrStocke|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrStocke|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrStocke[]    findAll()
 * @method LrStocke[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrStockeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrStocke::class);
    }

//    /**
//     * @return LrStocke[] Returns an array of LrStocke objects
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

//    public function findOneBySomeField($value): ?LrStocke
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
