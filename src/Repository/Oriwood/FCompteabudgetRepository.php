<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FCompteabudget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCompteabudget>
 *
 * @method FCompteabudget|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCompteabudget|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCompteabudget[]    findAll()
 * @method FCompteabudget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FCompteabudgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCompteabudget::class);
    }

//    /**
//     * @return FCompteabudget[] Returns an array of FCompteabudget objects
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

//    public function findOneBySomeField($value): ?FCompteabudget
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
