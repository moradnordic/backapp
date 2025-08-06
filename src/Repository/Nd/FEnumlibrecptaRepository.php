<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEnumlibrecpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumlibrecpta>
 *
 * @method FEnumlibrecpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumlibrecpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumlibrecpta[]    findAll()
 * @method FEnumlibrecpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumlibrecptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumlibrecpta::class);
    }

//    /**
//     * @return FEnumlibrecpta[] Returns an array of FEnumlibrecpta objects
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

//    public function findOneBySomeField($value): ?FEnumlibrecpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
