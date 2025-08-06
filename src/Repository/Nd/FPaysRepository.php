<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FPays;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FPays>
 *
 * @method FPays|null find($id, $lockMode = null, $lockVersion = null)
 * @method FPays|null findOneBy(array $criteria, array $orderBy = null)
 * @method FPays[]    findAll()
 * @method FPays[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FPaysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FPays::class);
    }

//    /**
//     * @return FPays[] Returns an array of FPays objects
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

//    public function findOneBySomeField($value): ?FPays
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
