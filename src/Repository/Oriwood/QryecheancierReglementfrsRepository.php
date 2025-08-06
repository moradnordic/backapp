<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\QryecheancierReglementfrs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QryecheancierReglementfrs>
 *
 * @method QryecheancierReglementfrs|null find($id, $lockMode = null, $lockVersion = null)
 * @method QryecheancierReglementfrs|null findOneBy(array $criteria, array $orderBy = null)
 * @method QryecheancierReglementfrs[]    findAll()
 * @method QryecheancierReglementfrs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QryecheancierReglementfrsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QryecheancierReglementfrs::class);
    }

//    /**
//     * @return QryecheancierReglementfrs[] Returns an array of QryecheancierReglementfrs objects
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

//    public function findOneBySomeField($value): ?QryecheancierReglementfrs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
