<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FFamtarif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FFamtarif>
 *
 * @method FFamtarif|null find($id, $lockMode = null, $lockVersion = null)
 * @method FFamtarif|null findOneBy(array $criteria, array $orderBy = null)
 * @method FFamtarif[]    findAll()
 * @method FFamtarif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFamtarifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FFamtarif::class);
    }

//    /**
//     * @return FFamtarif[] Returns an array of FFamtarif objects
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

//    public function findOneBySomeField($value): ?FFamtarif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
