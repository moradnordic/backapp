<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FLivraison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FLivraison>
 *
 * @method FLivraison|null find($id, $lockMode = null, $lockVersion = null)
 * @method FLivraison|null findOneBy(array $criteria, array $orderBy = null)
 * @method FLivraison[]    findAll()
 * @method FLivraison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FLivraisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FLivraison::class);
    }

//    /**
//     * @return FLivraison[] Returns an array of FLivraison objects
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

//    public function findOneBySomeField($value): ?FLivraison
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
