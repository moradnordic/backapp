<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FRegroupobs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FRegroupobs>
 *
 * @method FRegroupobs|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRegroupobs|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRegroupobs[]    findAll()
 * @method FRegroupobs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRegroupobsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRegroupobs::class);
    }

//    /**
//     * @return FRegroupobs[] Returns an array of FRegroupobs objects
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

//    public function findOneBySomeField($value): ?FRegroupobs
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
