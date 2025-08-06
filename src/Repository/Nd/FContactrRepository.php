<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FContactr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FContactr>
 *
 * @method FContactr|null find($id, $lockMode = null, $lockVersion = null)
 * @method FContactr|null findOneBy(array $criteria, array $orderBy = null)
 * @method FContactr[]    findAll()
 * @method FContactr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FContactrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FContactr::class);
    }

//    /**
//     * @return FContactr[] Returns an array of FContactr objects
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

//    public function findOneBySomeField($value): ?FContactr
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
