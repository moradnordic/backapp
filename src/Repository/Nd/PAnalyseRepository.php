<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PAnalyse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAnalyse>
 *
 * @method PAnalyse|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAnalyse|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAnalyse[]    findAll()
 * @method PAnalyse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAnalyseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAnalyse::class);
    }

//    /**
//     * @return PAnalyse[] Returns an array of PAnalyse objects
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

//    public function findOneBySomeField($value): ?PAnalyse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
