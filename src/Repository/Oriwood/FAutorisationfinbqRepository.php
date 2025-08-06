<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FAutorisationfinbq;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAutorisationfinbq>
 *
 * @method FAutorisationfinbq|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAutorisationfinbq|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAutorisationfinbq[]    findAll()
 * @method FAutorisationfinbq[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAutorisationfinbqRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAutorisationfinbq::class);
    }

//    /**
//     * @return FAutorisationfinbq[] Returns an array of FAutorisationfinbq objects
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

//    public function findOneBySomeField($value): ?FAutorisationfinbq
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
