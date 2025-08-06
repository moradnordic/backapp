<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEnumlibrecial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumlibrecial>
 *
 * @method FEnumlibrecial|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumlibrecial|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumlibrecial[]    findAll()
 * @method FEnumlibrecial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumlibrecialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumlibrecial::class);
    }

//    /**
//     * @return FEnumlibrecial[] Returns an array of FEnumlibrecial objects
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

//    public function findOneBySomeField($value): ?FEnumlibrecial
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
