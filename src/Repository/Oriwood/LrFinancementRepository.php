<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrFinancement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrFinancement>
 *
 * @method LrFinancement|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrFinancement|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrFinancement[]    findAll()
 * @method LrFinancement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrFinancementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrFinancement::class);
    }

//    /**
//     * @return LrFinancement[] Returns an array of LrFinancement objects
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

//    public function findOneBySomeField($value): ?LrFinancement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
