<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEcriturea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcriturea>
 *
 * @method FEcriturea|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcriturea|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcriturea[]    findAll()
 * @method FEcriturea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcritureaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcriturea::class);
    }

//    /**
//     * @return FEcriturea[] Returns an array of FEcriturea objects
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

//    public function findOneBySomeField($value): ?FEcriturea
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
