<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAboperiode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAboperiode>
 *
 * @method FAboperiode|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAboperiode|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAboperiode[]    findAll()
 * @method FAboperiode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAboperiodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAboperiode::class);
    }

//    /**
//     * @return FAboperiode[] Returns an array of FAboperiode objects
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

//    public function findOneBySomeField($value): ?FAboperiode
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
