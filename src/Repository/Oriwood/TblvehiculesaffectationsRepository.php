<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblvehiculesaffectations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblvehiculesaffectations>
 *
 * @method Tblvehiculesaffectations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblvehiculesaffectations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblvehiculesaffectations[]    findAll()
 * @method Tblvehiculesaffectations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblvehiculesaffectationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblvehiculesaffectations::class);
    }

//    /**
//     * @return Tblvehiculesaffectations[] Returns an array of Tblvehiculesaffectations objects
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

//    public function findOneBySomeField($value): ?Tblvehiculesaffectations
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
