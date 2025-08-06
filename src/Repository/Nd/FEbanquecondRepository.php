<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEbanquecond;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEbanquecond>
 *
 * @method FEbanquecond|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEbanquecond|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEbanquecond[]    findAll()
 * @method FEbanquecond[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEbanquecondRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEbanquecond::class);
    }

//    /**
//     * @return FEbanquecond[] Returns an array of FEbanquecond objects
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

//    public function findOneBySomeField($value): ?FEbanquecond
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
