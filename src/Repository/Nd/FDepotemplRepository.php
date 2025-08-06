<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FDepotempl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDepotempl>
 *
 * @method FDepotempl|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDepotempl|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDepotempl[]    findAll()
 * @method FDepotempl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDepotemplRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDepotempl::class);
    }

//    /**
//     * @return FDepotempl[] Returns an array of FDepotempl objects
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

//    public function findOneBySomeField($value): ?FDepotempl
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
