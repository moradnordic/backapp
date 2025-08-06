<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tbltelconsommation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbltelconsommation>
 *
 * @method Tbltelconsommation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbltelconsommation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbltelconsommation[]    findAll()
 * @method Tbltelconsommation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltelconsommationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbltelconsommation::class);
    }

//    /**
//     * @return Tbltelconsommation[] Returns an array of Tbltelconsommation objects
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

//    public function findOneBySomeField($value): ?Tbltelconsommation
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
