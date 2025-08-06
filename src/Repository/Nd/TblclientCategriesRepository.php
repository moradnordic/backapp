<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TblclientCategries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblclientCategries>
 *
 * @method TblclientCategries|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblclientCategries|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblclientCategries[]    findAll()
 * @method TblclientCategries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblclientCategriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblclientCategries::class);
    }

//    /**
//     * @return TblclientCategries[] Returns an array of TblclientCategries objects
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

//    public function findOneBySomeField($value): ?TblclientCategries
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
