<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Cbsysabonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cbsysabonnement>
 *
 * @method Cbsysabonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cbsysabonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cbsysabonnement[]    findAll()
 * @method Cbsysabonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CbsysabonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cbsysabonnement::class);
    }

//    /**
//     * @return Cbsysabonnement[] Returns an array of Cbsysabonnement objects
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

//    public function findOneBySomeField($value): ?Cbsysabonnement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
