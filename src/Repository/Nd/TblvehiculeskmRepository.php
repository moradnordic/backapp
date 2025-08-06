<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblvehiculeskm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblvehiculeskm>
 *
 * @method Tblvehiculeskm|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblvehiculeskm|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblvehiculeskm[]    findAll()
 * @method Tblvehiculeskm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblvehiculeskmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblvehiculeskm::class);
    }

//    /**
//     * @return Tblvehiculeskm[] Returns an array of Tblvehiculeskm objects
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

//    public function findOneBySomeField($value): ?Tblvehiculeskm
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
