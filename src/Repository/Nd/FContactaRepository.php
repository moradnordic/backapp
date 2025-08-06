<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FContacta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FContacta>
 *
 * @method FContacta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FContacta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FContacta[]    findAll()
 * @method FContacta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FContactaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FContacta::class);
    }

//    /**
//     * @return FContacta[] Returns an array of FContacta objects
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

//    public function findOneBySomeField($value): ?FContacta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
