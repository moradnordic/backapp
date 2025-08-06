<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FRegrevision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FRegrevision>
 *
 * @method FRegrevision|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRegrevision|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRegrevision[]    findAll()
 * @method FRegrevision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRegrevisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRegrevision::class);
    }

//    /**
//     * @return FRegrevision[] Returns an array of FRegrevision objects
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

//    public function findOneBySomeField($value): ?FRegrevision
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
