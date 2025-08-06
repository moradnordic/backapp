<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FTarifcond;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FTarifcond>
 *
 * @method FTarifcond|null find($id, $lockMode = null, $lockVersion = null)
 * @method FTarifcond|null findOneBy(array $criteria, array $orderBy = null)
 * @method FTarifcond[]    findAll()
 * @method FTarifcond[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FTarifcondRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FTarifcond::class);
    }

//    /**
//     * @return FTarifcond[] Returns an array of FTarifcond objects
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

//    public function findOneBySomeField($value): ?FTarifcond
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
