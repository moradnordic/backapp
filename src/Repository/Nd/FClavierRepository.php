<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FClavier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FClavier>
 *
 * @method FClavier|null find($id, $lockMode = null, $lockVersion = null)
 * @method FClavier|null findOneBy(array $criteria, array $orderBy = null)
 * @method FClavier[]    findAll()
 * @method FClavier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FClavierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FClavier::class);
    }

//    /**
//     * @return FClavier[] Returns an array of FClavier objects
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

//    public function findOneBySomeField($value): ?FClavier
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
