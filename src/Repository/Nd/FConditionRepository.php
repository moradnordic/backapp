<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FCondition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FCondition>
 *
 * @method FCondition|null find($id, $lockMode = null, $lockVersion = null)
 * @method FCondition|null findOneBy(array $criteria, array $orderBy = null)
 * @method FCondition[]    findAll()
 * @method FCondition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FConditionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FCondition::class);
    }

//    /**
//     * @return FCondition[] Returns an array of FCondition objects
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

//    public function findOneBySomeField($value): ?FCondition
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
