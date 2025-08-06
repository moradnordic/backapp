<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FFourchetteresultat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FFourchetteresultat>
 *
 * @method FFourchetteresultat|null find($id, $lockMode = null, $lockVersion = null)
 * @method FFourchetteresultat|null findOneBy(array $criteria, array $orderBy = null)
 * @method FFourchetteresultat[]    findAll()
 * @method FFourchetteresultat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFourchetteresultatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FFourchetteresultat::class);
    }

//    /**
//     * @return FFourchetteresultat[] Returns an array of FFourchetteresultat objects
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

//    public function findOneBySomeField($value): ?FFourchetteresultat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
