<?php

namespace App\Repository\Nd;

use App\Entity\Nd\TblchargefonctionnementDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblchargefonctionnementDetail>
 *
 * @method TblchargefonctionnementDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblchargefonctionnementDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblchargefonctionnementDetail[]    findAll()
 * @method TblchargefonctionnementDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchargefonctionnementDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblchargefonctionnementDetail::class);
    }

//    /**
//     * @return TblchargefonctionnementDetail[] Returns an array of TblchargefonctionnementDetail objects
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

//    public function findOneBySomeField($value): ?TblchargefonctionnementDetail
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
