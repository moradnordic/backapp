<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Cbsyslibre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbsyslibre>
 *
 * @method Cbsyslibre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbsyslibre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbsyslibre[]    findAll()
 * @method Cbsyslibre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbsyslibreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbsyslibre::class);
    }

//    /**
//     * @return Cbsyslibre[] Returns an array of Cbsyslibre objects
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

//    public function findOneBySomeField($value): ?Cbsyslibre
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
