<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblsortsmoyenspayment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblsortsmoyenspayment>
 *
 * @method Tblsortsmoyenspayment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblsortsmoyenspayment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblsortsmoyenspayment[]    findAll()
 * @method Tblsortsmoyenspayment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblsortsmoyenspaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblsortsmoyenspayment::class);
    }

//    /**
//     * @return Tblsortsmoyenspayment[] Returns an array of Tblsortsmoyenspayment objects
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

//    public function findOneBySomeField($value): ?Tblsortsmoyenspayment
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
