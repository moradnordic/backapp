<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PLitige;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PLitige>
 *
 * @method PLitige|null find($id, $lockMode = null, $lockVersion = null)
 * @method PLitige|null findOneBy(array $criteria, array $orderBy = null)
 * @method PLitige[]    findAll()
 * @method PLitige[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PLitigeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PLitige::class);
    }

//    /**
//     * @return PLitige[] Returns an array of PLitige objects
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

//    public function findOneBySomeField($value): ?PLitige
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
