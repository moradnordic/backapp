<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrDevis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrDevis>
 *
 * @method LrDevis|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrDevis|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrDevis[]    findAll()
 * @method LrDevis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrDevisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrDevis::class);
    }

//    /**
//     * @return LrDevis[] Returns an array of LrDevis objects
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

//    public function findOneBySomeField($value): ?LrDevis
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
