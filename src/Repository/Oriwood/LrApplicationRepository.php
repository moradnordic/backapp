<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrApplication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrApplication>
 *
 * @method LrApplication|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrApplication|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrApplication[]    findAll()
 * @method LrApplication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrApplicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrApplication::class);
    }

//    /**
//     * @return LrApplication[] Returns an array of LrApplication objects
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

//    public function findOneBySomeField($value): ?LrApplication
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
