<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblblstodisbursment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblblstodisbursment>
 *
 * @method Tblblstodisbursment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblblstodisbursment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblblstodisbursment[]    findAll()
 * @method Tblblstodisbursment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblblstodisbursmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblblstodisbursment::class);
    }

//    /**
//     * @return Tblblstodisbursment[] Returns an array of Tblblstodisbursment objects
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

//    public function findOneBySomeField($value): ?Tblblstodisbursment
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
