<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TblbaremetarifTypeclient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblbaremetarifTypeclient>
 *
 * @method TblbaremetarifTypeclient|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblbaremetarifTypeclient|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblbaremetarifTypeclient[]    findAll()
 * @method TblbaremetarifTypeclient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblbaremetarifTypeclientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblbaremetarifTypeclient::class);
    }

//    /**
//     * @return TblbaremetarifTypeclient[] Returns an array of TblbaremetarifTypeclient objects
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

//    public function findOneBySomeField($value): ?TblbaremetarifTypeclient
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
