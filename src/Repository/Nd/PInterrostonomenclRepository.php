<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PInterrostonomencl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterrostonomencl>
 *
 * @method PInterrostonomencl|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterrostonomencl|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterrostonomencl[]    findAll()
 * @method PInterrostonomencl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterrostonomenclRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterrostonomencl::class);
    }

//    /**
//     * @return PInterrostonomencl[] Returns an array of PInterrostonomencl objects
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

//    public function findOneBySomeField($value): ?PInterrostonomencl
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
