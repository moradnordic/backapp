<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FGamstockempl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FGamstockempl>
 *
 * @method FGamstockempl|null find($id, $lockMode = null, $lockVersion = null)
 * @method FGamstockempl|null findOneBy(array $criteria, array $orderBy = null)
 * @method FGamstockempl[]    findAll()
 * @method FGamstockempl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FGamstockemplRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FGamstockempl::class);
    }

//    /**
//     * @return FGamstockempl[] Returns an array of FGamstockempl objects
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

//    public function findOneBySomeField($value): ?FGamstockempl
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
