<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrImportation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrImportation>
 *
 * @method LrImportation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrImportation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrImportation[]    findAll()
 * @method LrImportation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrImportationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrImportation::class);
    }

//    /**
//     * @return LrImportation[] Returns an array of LrImportation objects
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

//    public function findOneBySomeField($value): ?LrImportation
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
