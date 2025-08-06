<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblbanquesmarocaines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblbanquesmarocaines>
 *
 * @method Tblbanquesmarocaines|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblbanquesmarocaines|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblbanquesmarocaines[]    findAll()
 * @method Tblbanquesmarocaines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblbanquesmarocainesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblbanquesmarocaines::class);
    }

//    /**
//     * @return Tblbanquesmarocaines[] Returns an array of Tblbanquesmarocaines objects
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

//    public function findOneBySomeField($value): ?Tblbanquesmarocaines
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
