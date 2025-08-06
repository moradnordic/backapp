<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FPrevision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FPrevision>
 *
 * @method FPrevision|null find($id, $lockMode = null, $lockVersion = null)
 * @method FPrevision|null findOneBy(array $criteria, array $orderBy = null)
 * @method FPrevision[]    findAll()
 * @method FPrevision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FPrevisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FPrevision::class);
    }

//    /**
//     * @return FPrevision[] Returns an array of FPrevision objects
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

//    public function findOneBySomeField($value): ?FPrevision
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
