<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PInterrocompteress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterrocompteress>
 *
 * @method PInterrocompteress|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterrocompteress|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterrocompteress[]    findAll()
 * @method PInterrocompteress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterrocompteressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterrocompteress::class);
    }

//    /**
//     * @return PInterrocompteress[] Returns an array of PInterrocompteress objects
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

//    public function findOneBySomeField($value): ?PInterrocompteress
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
