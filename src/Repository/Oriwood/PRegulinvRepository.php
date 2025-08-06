<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PRegulinv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRegulinv>
 *
 * @method PRegulinv|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRegulinv|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRegulinv[]    findAll()
 * @method PRegulinv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRegulinvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRegulinv::class);
    }

//    /**
//     * @return PRegulinv[] Returns an array of PRegulinv objects
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

//    public function findOneBySomeField($value): ?PRegulinv
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
