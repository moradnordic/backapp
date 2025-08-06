<?php

namespace App\Repository\Nd;

use App\Entity\Nd\LrDecaissement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrDecaissement>
 *
 * @method LrDecaissement|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrDecaissement|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrDecaissement[]    findAll()
 * @method LrDecaissement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrDecaissementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrDecaissement::class);
    }

//    /**
//     * @return LrDecaissement[] Returns an array of LrDecaissement objects
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

//    public function findOneBySomeField($value): ?LrDecaissement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
