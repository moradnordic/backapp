<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FReglech;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FReglech>
 *
 * @method FReglech|null find($id, $lockMode = null, $lockVersion = null)
 * @method FReglech|null findOneBy(array $criteria, array $orderBy = null)
 * @method FReglech[]    findAll()
 * @method FReglech[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FReglechRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FReglech::class);
    }

//    /**
//     * @return FReglech[] Returns an array of FReglech objects
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

//    public function findOneBySomeField($value): ?FReglech
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
