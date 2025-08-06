<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\TblchargefonctionnementEntete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TblchargefonctionnementEntete>
 *
 * @method TblchargefonctionnementEntete|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblchargefonctionnementEntete|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblchargefonctionnementEntete[]    findAll()
 * @method TblchargefonctionnementEntete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblchargefonctionnementEnteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblchargefonctionnementEntete::class);
    }

//    /**
//     * @return TblchargefonctionnementEntete[] Returns an array of TblchargefonctionnementEntete objects
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

//    public function findOneBySomeField($value): ?TblchargefonctionnementEntete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
