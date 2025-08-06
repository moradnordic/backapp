<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblbanquesfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblbanquesfrs>
 *
 * @method Tblbanquesfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblbanquesfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblbanquesfrs[]    findAll()
 * @method Tblbanquesfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblbanquesfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblbanquesfrs::class);
    }

//    /**
//     * @return Tblbanquesfrs[] Returns an array of Tblbanquesfrs objects
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

//    public function findOneBySomeField($value): ?Tblbanquesfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
