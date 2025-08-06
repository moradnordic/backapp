<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Result33;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Result33>
 *
 * @method Result33|null find($id, $lockMode = null, $lockVersion = null)
 * @method Result33|null findOneBy(array $criteria, array $orderBy = null)
 * @method Result33[]    findAll()
 * @method Result33[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Result33Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Result33::class);
    }

//    /**
//     * @return Result33[] Returns an array of Result33 objects
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

//    public function findOneBySomeField($value): ?Result33
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
