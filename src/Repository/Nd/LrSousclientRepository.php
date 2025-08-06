<?php

namespace App\Repository\Nd;

use App\Entity\Nd\LrSousclient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrSousclient>
 *
 * @method LrSousclient|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrSousclient|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrSousclient[]    findAll()
 * @method LrSousclient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrSousclientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrSousclient::class);
    }

//    /**
//     * @return LrSousclient[] Returns an array of LrSousclient objects
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

//    public function findOneBySomeField($value): ?LrSousclient
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
