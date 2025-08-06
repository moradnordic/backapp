<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEnumcond;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEnumcond>
 *
 * @method FEnumcond|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEnumcond|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEnumcond[]    findAll()
 * @method FEnumcond[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEnumcondRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEnumcond::class);
    }

//    /**
//     * @return FEnumcond[] Returns an array of FEnumcond objects
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

//    public function findOneBySomeField($value): ?FEnumcond
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
