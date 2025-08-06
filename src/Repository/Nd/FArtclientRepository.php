<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FArtclient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtclient>
 *
 * @method FArtclient|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtclient|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtclient[]    findAll()
 * @method FArtclient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtclientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtclient::class);
    }

//    /**
//     * @return FArtclient[] Returns an array of FArtclient objects
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

//    public function findOneBySomeField($value): ?FArtclient
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
