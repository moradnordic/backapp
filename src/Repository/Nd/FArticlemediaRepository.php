<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FArticlemedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArticlemedia>
 *
 * @method FArticlemedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArticlemedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArticlemedia[]    findAll()
 * @method FArticlemedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArticlemediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArticlemedia::class);
    }

//    /**
//     * @return FArticlemedia[] Returns an array of FArticlemedia objects
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

//    public function findOneBySomeField($value): ?FArticlemedia
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
