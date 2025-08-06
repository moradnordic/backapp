<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FFamclient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FFamclient>
 *
 * @method FFamclient|null find($id, $lockMode = null, $lockVersion = null)
 * @method FFamclient|null findOneBy(array $criteria, array $orderBy = null)
 * @method FFamclient[]    findAll()
 * @method FFamclient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFamclientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FFamclient::class);
    }

//    /**
//     * @return FFamclient[] Returns an array of FFamclient objects
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

//    public function findOneBySomeField($value): ?FFamclient
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
