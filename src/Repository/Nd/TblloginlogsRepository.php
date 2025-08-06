<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblloginlogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblloginlogs>
 *
 * @method Tblloginlogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblloginlogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblloginlogs[]    findAll()
 * @method Tblloginlogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblloginlogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblloginlogs::class);
    }

//    /**
//     * @return Tblloginlogs[] Returns an array of Tblloginlogs objects
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

//    public function findOneBySomeField($value): ?Tblloginlogs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
