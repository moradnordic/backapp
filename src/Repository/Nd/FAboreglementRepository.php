<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAboreglement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAboreglement>
 *
 * @method FAboreglement|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAboreglement|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAboreglement[]    findAll()
 * @method FAboreglement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAboreglementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAboreglement::class);
    }

//    /**
//     * @return FAboreglement[] Returns an array of FAboreglement objects
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

//    public function findOneBySomeField($value): ?FAboreglement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
