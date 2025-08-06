<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FReglementt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FReglementt>
 *
 * @method FReglementt|null find($id, $lockMode = null, $lockVersion = null)
 * @method FReglementt|null findOneBy(array $criteria, array $orderBy = null)
 * @method FReglementt[]    findAll()
 * @method FReglementt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FReglementtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FReglementt::class);
    }

//    /**
//     * @return FReglementt[] Returns an array of FReglementt objects
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

//    public function findOneBySomeField($value): ?FReglementt
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
