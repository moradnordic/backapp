<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAboentete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAboentete>
 *
 * @method FAboentete|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAboentete|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAboentete[]    findAll()
 * @method FAboentete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAboenteteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAboentete::class);
    }

//    /**
//     * @return FAboentete[] Returns an array of FAboentete objects
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

//    public function findOneBySomeField($value): ?FAboentete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
