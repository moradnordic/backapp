<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrCoefficient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrCoefficient>
 *
 * @method LrCoefficient|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrCoefficient|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrCoefficient[]    findAll()
 * @method LrCoefficient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrCoefficientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrCoefficient::class);
    }

//    /**
//     * @return LrCoefficient[] Returns an array of LrCoefficient objects
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

//    public function findOneBySomeField($value): ?LrCoefficient
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
