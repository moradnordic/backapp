<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\DoPieceArrivage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DoPieceArrivage>
 *
 * @method DoPieceArrivage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DoPieceArrivage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DoPieceArrivage[]    findAll()
 * @method DoPieceArrivage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoPieceArrivageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoPieceArrivage::class);
    }

//    /**
//     * @return DoPieceArrivage[] Returns an array of DoPieceArrivage objects
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

//    public function findOneBySomeField($value): ?DoPieceArrivage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
