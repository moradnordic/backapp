<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrNumerotation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrNumerotation>
 *
 * @method LrNumerotation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrNumerotation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrNumerotation[]    findAll()
 * @method LrNumerotation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrNumerotationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrNumerotation::class);
    }

//    /**
//     * @return LrNumerotation[] Returns an array of LrNumerotation objects
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

//    public function findOneBySomeField($value): ?LrNumerotation
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
