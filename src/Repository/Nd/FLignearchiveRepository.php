<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FLignearchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FLignearchive>
 *
 * @method FLignearchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method FLignearchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method FLignearchive[]    findAll()
 * @method FLignearchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FLignearchiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FLignearchive::class);
    }

//    /**
//     * @return FLignearchive[] Returns an array of FLignearchive objects
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

//    public function findOneBySomeField($value): ?FLignearchive
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
