<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PFactureaff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PFactureaff>
 *
 * @method PFactureaff|null find($id, $lockMode = null, $lockVersion = null)
 * @method PFactureaff|null findOneBy(array $criteria, array $orderBy = null)
 * @method PFactureaff[]    findAll()
 * @method PFactureaff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PFactureaffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PFactureaff::class);
    }

//    /**
//     * @return PFactureaff[] Returns an array of PFactureaff objects
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

//    public function findOneBySomeField($value): ?PFactureaff
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
