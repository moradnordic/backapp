<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FDocentetetext;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDocentetetext>
 *
 * @method FDocentetetext|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDocentetetext|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDocentetetext[]    findAll()
 * @method FDocentetetext[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDocentetetextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDocentetetext::class);
    }

//    /**
//     * @return FDocentetetext[] Returns an array of FDocentetetext objects
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

//    public function findOneBySomeField($value): ?FDocentetetext
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
