<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCompteabudgetg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCompteabudgetg>
 *
 * @method FCompteabudgetg|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCompteabudgetg|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCompteabudgetg[]    findAll()
 * @method FCompteabudgetg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCompteabudgetgRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCompteabudgetg::class);
    }

//    /**
//     * @return FCompteabudgetg[] Returns an array of FCompteabudgetg objects
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

//    public function findOneBySomeField($value): ?FCompteabudgetg
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
