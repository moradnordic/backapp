<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEbudget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEbudget>
 *
 * @method FEbudget|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEbudget|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEbudget[]    findAll()
 * @method FEbudget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEbudgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEbudget::class);
    }

//    /**
//     * @return FEbudget[] Returns an array of FEbudget objects
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

//    public function findOneBySomeField($value): ?FEbudget
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
