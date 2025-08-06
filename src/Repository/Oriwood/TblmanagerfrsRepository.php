<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblmanagerfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblmanagerfrs>
 *
 * @method Tblmanagerfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblmanagerfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblmanagerfrs[]    findAll()
 * @method Tblmanagerfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblmanagerfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblmanagerfrs::class);
    }

//    /**
//     * @return Tblmanagerfrs[] Returns an array of Tblmanagerfrs objects
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

//    public function findOneBySomeField($value): ?Tblmanagerfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
