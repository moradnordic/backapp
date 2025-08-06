<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Cbsyssite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbsyssite>
 *
 * @method Cbsyssite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbsyssite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbsyssite[]    findAll()
 * @method Cbsyssite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbsyssiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbsyssite::class);
    }

//    /**
//     * @return Cbsyssite[] Returns an array of Cbsyssite objects
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

//    public function findOneBySomeField($value): ?Cbsyssite
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
