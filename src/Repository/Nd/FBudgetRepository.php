<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FBudget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FBudget>
 *
 * @method FBudget|null find($id, $lockMode = null, $lockVersion = null)
 * @method FBudget|null findOneBy(array $criteria, array $orderBy = null)
 * @method FBudget[]    findAll()
 * @method FBudget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FBudgetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FBudget::class);
    }

//    /**
//     * @return FBudget[] Returns an array of FBudget objects
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

//    public function findOneBySomeField($value): ?FBudget
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
