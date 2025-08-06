<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEcalendrier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcalendrier>
 *
 * @method FEcalendrier|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcalendrier|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcalendrier[]    findAll()
 * @method FEcalendrier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcalendrierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcalendrier::class);
    }

//    /**
//     * @return FEcalendrier[] Returns an array of FEcalendrier objects
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

//    public function findOneBySomeField($value): ?FEcalendrier
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
