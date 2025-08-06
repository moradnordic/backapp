<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAbonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAbonnement>
 *
 * @method FAbonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAbonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAbonnement[]    findAll()
 * @method FAbonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAbonnement::class);
    }

//    /**
//     * @return FAbonnement[] Returns an array of FAbonnement objects
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

//    public function findOneBySomeField($value): ?FAbonnement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
