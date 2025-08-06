<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrAppFact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrAppFact>
 *
 * @method LrAppFact|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrAppFact|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrAppFact[]    findAll()
 * @method LrAppFact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrAppFactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrAppFact::class);
    }

//    /**
//     * @return LrAppFact[] Returns an array of LrAppFact objects
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

//    public function findOneBySomeField($value): ?LrAppFact
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
