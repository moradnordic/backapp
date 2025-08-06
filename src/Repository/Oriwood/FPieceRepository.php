<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FPiece;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FPiece>
 *
 * @method FPiece|null find($id, $lockMode = null, $lockVersion = null)
 * @method FPiece|null findOneBy(array $criteria, array $orderBy = null)
 * @method FPiece[]    findAll()
 * @method FPiece[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FPieceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FPiece::class);
    }

//    /**
//     * @return FPiece[] Returns an array of FPiece objects
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

//    public function findOneBySomeField($value): ?FPiece
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
