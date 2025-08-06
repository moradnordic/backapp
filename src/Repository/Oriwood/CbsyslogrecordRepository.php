<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Cbsyslogrecord;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbsyslogrecord>
 *
 * @method Cbsyslogrecord|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbsyslogrecord|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbsyslogrecord[]    findAll()
 * @method Cbsyslogrecord[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbsyslogrecordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbsyslogrecord::class);
    }

//    /**
//     * @return Cbsyslogrecord[] Returns an array of Cbsyslogrecord objects
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

//    public function findOneBySomeField($value): ?Cbsyslogrecord
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
