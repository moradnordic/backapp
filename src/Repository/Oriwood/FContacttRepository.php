<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FContactt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FContactt>
 *
 * @method FContactt|null find($id, $lockMode = null, $lockVersion = null)
 * @method FContactt|null findOneBy(array $criteria, array $orderBy = null)
 * @method FContactt[]    findAll()
 * @method FContactt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FContacttRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FContactt::class);
    }

//    /**
//     * @return FContactt[] Returns an array of FContactt objects
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

//    public function findOneBySomeField($value): ?FContactt
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
