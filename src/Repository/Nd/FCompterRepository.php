<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCompter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCompter>
 *
 * @method FCompter|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCompter|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCompter[]    findAll()
 * @method FCompter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCompterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCompter::class);
    }

//    /**
//     * @return FCompter[] Returns an array of FCompter objects
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

//    public function findOneBySomeField($value): ?FCompter
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
