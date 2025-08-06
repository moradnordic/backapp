<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PPeriod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PPeriod>
 *
 * @method PPeriod|null find($id, $lockMode = null, $lockVersion = null)
 * @method PPeriod|null findOneBy(array $criteria, array $orderBy = null)
 * @method PPeriod[]    findAll()
 * @method PPeriod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PPeriodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PPeriod::class);
    }

//    /**
//     * @return PPeriod[] Returns an array of PPeriod objects
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

//    public function findOneBySomeField($value): ?PPeriod
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
