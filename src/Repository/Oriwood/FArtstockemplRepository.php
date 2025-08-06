<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtstockempl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtstockempl>
 *
 * @method FArtstockempl|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtstockempl|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtstockempl[]    findAll()
 * @method FArtstockempl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtstockemplRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtstockempl::class);
    }

//    /**
//     * @return FArtstockempl[] Returns an array of FArtstockempl objects
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

//    public function findOneBySomeField($value): ?FArtstockempl
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
