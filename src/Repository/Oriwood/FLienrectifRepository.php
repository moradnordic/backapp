<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FLienrectif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FLienrectif>
 *
 * @method FLienrectif|null find($id, $lockMode = null, $lockVersion = null)
 * @method FLienrectif|null findOneBy(array $criteria, array $orderBy = null)
 * @method FLienrectif[]    findAll()
 * @method FLienrectif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FLienrectifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FLienrectif::class);
    }

//    /**
//     * @return FLienrectif[] Returns an array of FLienrectif objects
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

//    public function findOneBySomeField($value): ?FLienrectif
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
