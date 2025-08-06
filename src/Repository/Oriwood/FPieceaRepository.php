<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FPiecea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FPiecea>
 *
 * @method FPiecea|null find($id, $lockMode = null, $lockVersion = null)
 * @method FPiecea|null findOneBy(array $criteria, array $orderBy = null)
 * @method FPiecea[]    findAll()
 * @method FPiecea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FPieceaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FPiecea::class);
    }

//    /**
//     * @return FPiecea[] Returns an array of FPiecea objects
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

//    public function findOneBySomeField($value): ?FPiecea
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
