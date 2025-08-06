<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FJmouv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FJmouv>
 *
 * @method FJmouv|null find($id, $lockMode = null, $lockVersion = null)
 * @method FJmouv|null findOneBy(array $criteria, array $orderBy = null)
 * @method FJmouv[]    findAll()
 * @method FJmouv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FJmouvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FJmouv::class);
    }

//    /**
//     * @return FJmouv[] Returns an array of FJmouv objects
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

//    public function findOneBySomeField($value): ?FJmouv
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
