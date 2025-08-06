<?php

namespace App\Repository\Nd;

use App\Entity\Nd\XxxTracaSage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<XxxTracaSage>
 *
 * @method XxxTracaSage|null find($id, $lockMode = null, $lockVersion = null)
 * @method XxxTracaSage|null findOneBy(array $criteria, array $orderBy = null)
 * @method XxxTracaSage[]    findAll()
 * @method XxxTracaSage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class XxxTracaSageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, XxxTracaSage::class);
    }

//    /**
//     * @return XxxTracaSage[] Returns an array of XxxTracaSage objects
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

//    public function findOneBySomeField($value): ?XxxTracaSage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
