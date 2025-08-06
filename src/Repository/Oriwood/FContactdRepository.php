<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FContactd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FContactd>
 *
 * @method FContactd|null find($id, $lockMode = null, $lockVersion = null)
 * @method FContactd|null findOneBy(array $criteria, array $orderBy = null)
 * @method FContactd[]    findAll()
 * @method FContactd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FContactdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FContactd::class);
    }

//    /**
//     * @return FContactd[] Returns an array of FContactd objects
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

//    public function findOneBySomeField($value): ?FContactd
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
