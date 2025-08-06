<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FContactb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FContactb>
 *
 * @method FContactb|null find($id, $lockMode = null, $lockVersion = null)
 * @method FContactb|null findOneBy(array $criteria, array $orderBy = null)
 * @method FContactb[]    findAll()
 * @method FContactb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FContactbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FContactb::class);
    }

//    /**
//     * @return FContactb[] Returns an array of FContactb objects
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

//    public function findOneBySomeField($value): ?FContactb
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
