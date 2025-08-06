<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FDocentete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDocentete>
 *
 * @method FDocentete|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDocentete|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDocentete[]    findAll()
 * @method FDocentete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDocenteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDocentete::class);
    }

//    /**
//     * @return FDocentete[] Returns an array of FDocentete objects
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

//    public function findOneBySomeField($value): ?FDocentete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
