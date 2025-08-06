<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FComptegbudgeta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptegbudgeta>
 *
 * @method FComptegbudgeta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptegbudgeta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptegbudgeta[]    findAll()
 * @method FComptegbudgeta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptegbudgetaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptegbudgeta::class);
    }

//    /**
//     * @return FComptegbudgeta[] Returns an array of FComptegbudgeta objects
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

//    public function findOneBySomeField($value): ?FComptegbudgeta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
