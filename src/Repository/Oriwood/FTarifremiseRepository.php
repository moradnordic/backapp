<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FTarifremise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FTarifremise>
 *
 * @method FTarifremise|null find($id, $lockMode = null, $lockVersion = null)
 * @method FTarifremise|null findOneBy(array $criteria, array $orderBy = null)
 * @method FTarifremise[]    findAll()
 * @method FTarifremise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FTarifremiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FTarifremise::class);
    }

//    /**
//     * @return FTarifremise[] Returns an array of FTarifremise objects
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

//    public function findOneBySomeField($value): ?FTarifremise
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
