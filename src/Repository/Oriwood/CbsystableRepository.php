<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Cbsystable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbsystable>
 *
 * @method Cbsystable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbsystable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbsystable[]    findAll()
 * @method Cbsystable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbsystableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbsystable::class);
    }

//    /**
//     * @return Cbsystable[] Returns an array of Cbsystable objects
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

//    public function findOneBySomeField($value): ?Cbsystable
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
