<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PBonapayer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PBonapayer>
 *
 * @method PBonapayer|null find($id, $lockMode = null, $lockVersion = null)
 * @method PBonapayer|null findOneBy(array $criteria, array $orderBy = null)
 * @method PBonapayer[]    findAll()
 * @method PBonapayer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PBonapayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PBonapayer::class);
    }

//    /**
//     * @return PBonapayer[] Returns an array of PBonapayer objects
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

//    public function findOneBySomeField($value): ?PBonapayer
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
