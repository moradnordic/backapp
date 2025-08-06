<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Cbsyslink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbsyslink>
 *
 * @method Cbsyslink|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbsyslink|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbsyslink[]    findAll()
 * @method Cbsyslink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbsyslinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbsyslink::class);
    }

//    /**
//     * @return Cbsyslink[] Returns an array of Cbsyslink objects
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

//    public function findOneBySomeField($value): ?Cbsyslink
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
