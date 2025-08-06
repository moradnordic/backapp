<?php

namespace App\Repository\Nd;

use App\Entity\Nd\LrImprime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrImprime>
 *
 * @method LrImprime|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrImprime|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrImprime[]    findAll()
 * @method LrImprime[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrImprimeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrImprime::class);
    }

//    /**
//     * @return LrImprime[] Returns an array of LrImprime objects
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

//    public function findOneBySomeField($value): ?LrImprime
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
