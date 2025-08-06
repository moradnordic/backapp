<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\QryecheancierDouane;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QryecheancierDouane>
 *
 * @method QryecheancierDouane|null find($id, $lockMode = null, $lockVersion = null)
 * @method QryecheancierDouane|null findOneBy(array $criteria, array $orderBy = null)
 * @method QryecheancierDouane[]    findAll()
 * @method QryecheancierDouane[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QryecheancierDouaneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QryecheancierDouane::class);
    }

//    /**
//     * @return QryecheancierDouane[] Returns an array of QryecheancierDouane objects
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

//    public function findOneBySomeField($value): ?QryecheancierDouane
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
