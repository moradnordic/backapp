<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\QryecheancierChequeemis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QryecheancierChequeemis>
 *
 * @method QryecheancierChequeemis|null find($id, $lockMode = null, $lockVersion = null)
 * @method QryecheancierChequeemis|null findOneBy(array $criteria, array $orderBy = null)
 * @method QryecheancierChequeemis[]    findAll()
 * @method QryecheancierChequeemis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QryecheancierChequeemisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QryecheancierChequeemis::class);
    }

//    /**
//     * @return QryecheancierChequeemis[] Returns an array of QryecheancierChequeemis objects
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

//    public function findOneBySomeField($value): ?QryecheancierChequeemis
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
