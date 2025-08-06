<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FRectificationmotif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FRectificationmotif>
 *
 * @method FRectificationmotif|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRectificationmotif|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRectificationmotif[]    findAll()
 * @method FRectificationmotif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRectificationmotifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRectificationmotif::class);
    }

//    /**
//     * @return FRectificationmotif[] Returns an array of FRectificationmotif objects
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

//    public function findOneBySomeField($value): ?FRectificationmotif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
